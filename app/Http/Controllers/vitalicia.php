<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\formValidation;
use App\tipos;
use App\datos;
use App\usuarios;
use App\medicamentos;
use App\horarios;
use App\alimentaciones;
use App\alimentos;
use App\geriatricos;
use App\gvalores;
use App\cuidadores;
use App\turnos;
use App\signos;
use App\pacientes;
use App\amedicamentos;
use App\actividades;


class vitalicia extends Controller
{
    //INICIO
       public function home()
    {
        $usuariosd=\DB::select("SELECT u.idu,u.usuario,u.contrasena,u.correo,t.tipo as tip
        FROM usuarios AS u
        INNER JOIN tipos AS t ON t.idt =  u.idt");

        $datosd = datos::withTrashed()->orderBy('idd','asc')->get();

        $pacientesd=\DB::select(" SELECT p.idpaciente,p.fechapaciente,
  CONCAT(d.nombre,' ',d.ap,' ',d.am)AS 'nombre',m.nombre AS medicamento,
  CONCAT(a.menu,' ',a.consumo)AS alimentacion,
  CONCAT(s.ta,' ',s.`fc`,' ',s.`fr`,' ',s.`temp`,' ',s.`spo2`,' ',s.`glucosa`,s.`protesis`)AS signos,
  g.valorg,v.act1
  FROM pacientes AS p
  INNER JOIN datos AS d  ON d.idd = p.idd
  INNER JOIN medicamentos AS m ON m.idmedicamento=p.idmedicamento
  INNER JOIN alimentaciones AS a ON a.idalimentacion=p.idalimentacion
  INNER JOIN signos AS s ON s.ids=p.ids
  INNER JOIN geriatricos AS g ON g.idgeriatricos=p.idgeriatricos
  INNER JOIN actividades AS v ON v.idactividades=p.idactividades");

$medicamentosm=\DB::select("SELECT m.`idmedicamento`,m.`nombre`,m.`indicacion`,m.`presen`,m.`terminotx`,h.`tipohorario`,am.`nmedica`
FROM medicamentos AS m
INNER JOIN horarios AS h ON h.idh=m.`idh`
INNER JOIN amedicamentos AS am ON am.idamedicamento=m.`idamedicamento`");

     
            return view ('vitalicia.home')
            ->with('usuariosd',$usuariosd)
            ->with('datosd',$datosd)
            ->with('medicamentosm',$medicamentosm)
            ->with('pacientesd',$pacientesd);
    } 
    
    //INICIO
       public function main()
    {
            return view ('vitalicia.main');
    } 
    
        //INICIO
       public function confirmacion()
    {
            return view ('vitalicia.confirmacion');
    }
    
    
    //INICIO
       public function spaciente()
    {
            return view ('vitalicia.pacientes');
    } 
    
    //USUARIOS
       public function rUsuario()
    {
        //INCREMENTA EL IDD PARA MOSTRAR EN LA VISTA    
        $clavequesigue = datos::withTrashed()->orderBy('idd','desc')
                                            ->take(1)
                                            ->get();
            if (count($clavequesigue)==0)
            {
                    $idds = 1;
            }
            else
            {
            $idds= $clavequesigue[0]->idd+1;
            }
        
        
        $rdusu = usuarios::withTrashed()->orderBy('usuario','asc')
                        
                          ->get();
        
            

            
        //return $carreras;
        return view ('vitalicia.rUsuario')
                    ->with('idds',$idds)
                    ->with('usuarios',$rdusu);
    } 
    
           public function usuario()
    {
            //EN LA VISTA DE USUARIO NOS MUESTRA EL SELECT DE LOS TIPOS DE USUARIOS
            $claveusu = usuarios::withTrashed()->orderBy('idu','desc')
                                            ->take(1)
                                            ->get();
                        

            if (count($claveusu)==0)
            {
                    $idus = 1;
            }
            else
            {
            $idus= $claveusu[0]->idu+1;
            }
               
               
            $tipos = tipos::where('activo','=','SI')
                                    ->orderBy('tipo','asc')
                                    ->get();
            return view ('vitalicia.usuario')
                ->with('tipos',$tipos)
                ->with('idus',$idus);
               
    } 

       public function bUsuario()
    {
            return view ('vitalicia.bUsuario');
    } 

       public function mUsuario()
    {
            return view ('vitalicia.mUsuario');
    }
    
    //PACIENTES

       public function cPaciente()
    {
            return view ('vitalicia.cPaciente');
    } 

       public function rPaciente()
    {
            return view ('vitalicia.rPaciente');
    } 

    //
    
           public function guardausuario(formValidation $request)
    {   
            $request->all(); //Procesa los datos del formulario
            
                    
            $file = $request->file('archivo');
            if($file!="")
            {
            $ldate = date('Ymd_His_');
            $img = $file->getClientOriginalName();
            $img2 = $ldate.$img;
            \Storage::disk('local')->put($img2, \File::get($file));
            }
            else
            {
                $img2='sinfoto.png';
            }
                $dat = new datos;
                $dat->idd = $request->idd;
                $dat->nombre = $request->nombre;
                $dat->ap = $request->ap;
                $dat->am = $request->am;    
                $dat->edad = $request->edad;
                $dat->telefono = $request->telefono;
                $dat->calle = $request->calle;
                $dat->numero = $request->numero;
                $dat->calle1 = $request->calle1;
                $dat->calle2 = $request->calle2;
                $dat->colonia = $request->colonia;
                $dat->municipio = $request->municipio;
                $dat->ciudad = $request->ciudad;
                $dat->cp = $request->cp;
                $dat->referencia = $request->referencia;
                $dat->archivo = $img2;
                $dat->idu = $request->idu;
                $dat->save();


                return redirect()->route('confirmacion');
    } 
    
      public function gusuario(Request $request)
    {   
            $request->all(); //Procesa los datos del formulario
            
        $this->validate($request,[
                'usuario' => 'required',
                'contrasena' => 'required',
                'correo' => 'required|email'
         ]);
                $usu = new usuarios;
                $usu->idu = $request->idu;
                $usu->usuario = $request->usuario;
                $usu->contrasena = $request->contrasena;
                $usu->correo = $request->correo;
                $usu->idt = $request->idt;
                $usu->save();


                return redirect()->route('confirmacion');
    }     

    public function rmedicamento()
    {
        //INCREMENTA EL IDD PARA MOSTRAR EN LA VISTA    
        $clavequesiguem =medicamentos::withTrashed()->orderBy('idmedicamento','desc')
                                            ->take(1)
                                            ->get();

                                            if (count($clavequesiguem)==0)
                                            {
                                                    $iddm = 1;
                                            }
                                            else
                                            {
                                       $iddm = $clavequesiguem[0]->idmedicamento+1;
                                        }
    

        $horarios = horarios::withTrashed()->orderBy('tipohorario','asc')
                        
                          ->get();
        
        $amedicamentos = amedicamentos::withTrashed()->orderBy('nmedica','asc')
                        
                          ->get();
        
            
        //return $carreras;
        return view ('vitalicia.rMedicamentos')
                    ->with('iddm',$iddm)
                    ->with('horarios',$horarios)
                    ->with('amedicamentos',$amedicamentos);
    } 

    public function guardamedicamento(Request $request)
    {   
              $request->all(); //Procesa los datos del formulario


                $med = new medicamentos;
                $med->indicacion = $request->indicacion;
                $med->presen = $request->presen;
                $med->terminotx = $request->terminotx;
                $med->idh = $request->idh;
                $med->idamedicamento = $request->medicam;
                $med->save();


              
                return redirect()->route('confirmacion');
    } 

    public function ralimentacion()
    {
        //INCREMENTA EL IDD PARA MOSTRAR EN LA VISTA    
        $claveali =alimentaciones::withTrashed()->orderBy('idalimentacion','desc')
                                            ->take(1)
                                            ->get();
                                            if (count($claveali)==0)
                                            {
                                                    $idal = 1;
                                            }
                                            else
                                            {
                                       $idal = $claveali[0]->idalimentacion+1;
                                        }
                                                                   
      

        $alimentos = alimentos::withTrashed()->orderBy('idalimentos','asc')
                     
                          ->get();
            
        //return $carreras;
        return view ('vitalicia.rAlimentacion')
                    ->with('idal',$idal)
                    ->with('alimentos',$alimentos);
    } 

    public function guardalimento(Request $request)
    {   
             // $request->all(); //Procesa los datos del formulario

        $hora =  $request->hora;
        $menu = $request->menu;
        $consumo= $request->consumo;
        $idalimentacion = $request->idalimentacion;
        $observaciones= $request->observaciones;
               
           $this->validate($request,[
                'nombre'=> ['regex:/^[A-Z][A-Z,a-z, , ñ,á,é,í,ó,ú]+$/'],
                'terminotx'=> ['regex:/^[A-Z][A-Z,a-z, , ñ,á,é,í,ó,ú]+$/'],
                'indicacion'=> ['regex:/^[A-Z][A-Z,a-z, , ñ,á,é,í,ó,ú]+$/'],
                'presen'=> ['regex:/^[A-Z][A-Z,a-z, , ñ,á,é,í,ó,ú]+$/'],
                'horario'=> ['regex:/^[A-Z][A-Z,a-z, , ñ,á,é,í,ó,ú]+$/']
         ]);
                $ali = new alimentaciones;
                $ali->idalimentacion = $request->idalimentacion;
                $ali->hora = $request->hora;
                $ali->menu = $request->menu;
                $ali->consumo = $request->consumo;
                $ali->observaciones = $request->observaciones;    
                $ali->idalimentos= $request->idalimentos;
                $ali->save();


              
                return redirect()->route('confirmacion');
    } 
    public function getdatos()

    {
   $datosd = datos::withTrashed()->orderBy('idd','asc')->get();
   return view ('vitalicia.cdatos')
   ->with('datosd',$datosd);
   
   }

   public function modificadat($idd)
	{
		$datosm = datos::where('idd','=',$idd)
		                     ->get();
	             //return $datosm;
		return view ('vitalicia.moddatos')
		->with('datosm',$datosm[0]);
        }
        
    public function guardamodificadat(Request $request)
	{
        $idd =  $request->idd;
        $nombre = $request->nombre;
        $ap = $request->ap;
        $am = $request->am;
        $edad = $request->edad;
	$telefono = $request->telefono;
        $calle = $request->calle;
        $numero = $request->numero;
        $calle1 = $request->calle1;
        $calle2 = $request->calle2;
        $colonia = $request->colonia;
        $municipio = $request->municipio;
        $ciudad = $request->ciudad;
        $cp = $request->cp;
        $referencia = $request->referencia;
      
        
        
        
		 $this->validate($request,[
         'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'edad'=>'required|integer|min:18',
		 'cp'=>['regex:/^[0-9]{5}$/'],
		 'beca'=>['regex:/^[0-9]+[.][0-9]{2}$/'],
		 'archivo'=>'image|mimes:jpeg,png,gif'
             ]);
             
             $file = $request->file('archivo');
             if($file!="")
             {	 
             $ldate = date('Ymd_His_');
             $img = $file->getClientOriginalName();
             $img2 = $ldate.$img;
             \Storage::disk('local')->put($img2, \File::get($file)); 
             }

	        $dato = datos::find($idd);
                $dato->idd = $request->idd;
                if($file!="")
	        {	
			$dato->archivo = $img2;
	        }
		$dato->nombre = $request->nombre;
		$dato->ap =$request->ap;
		$dato->am= $request->am;
                $dato->edad=$request->edad;
                $dato->telefono=$request->telefono;
                $dato->calle=$request->calle;
                $dato->numero=$request->numero;
                $dato->calle1=$request->calle1;
                $dato->calle2=$request->calle2;
                $dato->colonia=$request->colonia;
                $dato->municipio=$request->municipio;
                $dato->ciudad=$request->ciudad;
                $dato->cp=$request->cp;
                $dato->referencia=$request->referencia;
                $dato->save();
                return redirect()->route('confirmacion');
                       /* $proceso = "MODIFICA MAESTRO";
			$mensaje = "REgistro ha sido modificado correctamente";
			->with('proceso',$proceso)
                        ->with('mensaje',$mensaje);*/
                        // echo "Listo para modificar";
        
}

   public function eliminam($idd)
	{
		  datos::find($idd)->delete();
		   // $proceso = "ELIMINAR MAESTROS";
		//	$mensaje = "El maestro ha sido desactivado Correctamente";
			//return view ('sistema.mensaje')
			return redirect()->route('confirmacion');
        }
        
        public function restauram($idd)
	{
	datos::withTrashed()->where('idd',$idd)->restore();
        return redirect()->route('confirmacion');
        }
        
     public function efisicam($idd)
	{
		
   datos::withTrashed()->where('idd',$idd)->forceDelete();
   return redirect()->route('confirmacion');
    }
    

   public function rgeriatrico()
    {
        //INCREMENTA EL IDD PARA MOSTRAR EN LA VISTA    
        $claveger =geriatricos::withTrashed()->orderBy('idgeriatricos','desc')
                                            ->take(1)
                                            ->get();

                                            if (count($claveger)==0)
                                            {
                                                    $idger = 1;
                                            }
                                            else
                                            {
                                       $idger = $claveger[0]->idgeriatricos+1;
                                        }

 

        $gvalores = gvalores::withTrashed()->orderBy('idvg','asc')
                     
                      ->get();
            
     
        return view ('vitalicia.rGeriatricos')
                    ->with('idger',$idger)
                    ->with('gvalores',$gvalores);
    } 

    public function guardageriatrico(Request $request)
    {   
             // $request->all(); //Procesa los datos del formulario

        $idgeriatricos = $request->idgeriatricos;
        $valorg =  $request->valorg;
        $valorg1 = $request->valorg1;
        $valorg2= $request->valorg2;
      
       
               
           
                $ger = new geriatricos;
                $ger->idgeriatricos = $request->idgeriatricos;
                $ger->valorg = $request->valorg;
                $ger->valorg1 = $request->valorg1;
                $ger->valorg2 = $request->valorg2;  
                $ger->idvg= $request->idvg;
                $ger->save();


                return redirect()->route('confirmacion');

//                return redirect()->route('home');

    } 

    public function rcuidador()
    {
        //INCREMENTA EL IDD PARA MOSTRAR EN LA VISTA    
        $clavecui =cuidadores::withTrashed()->orderBy('idcuidador','desc')
                                            ->take(1)
                                            ->get();
                                            if (count($clavecui)==0)
                                            {
                                                    $idcu = 1;
                                            }
                                            else
                                            {
                                       $idcu = $clavecui[0]->idcuidador+1;
                                        }
                                                                   
      

        $datoss =datos::withTrashed()->orderBy('idd','asc')
                     
                          ->get();
            
        //return $carreras;
        return view ('vitalicia.rCuidador')
                    ->with('idcu',$idcu)
                    ->with('datoss',$datoss);
    } 

      public function guardacuidador(Request $request)
    {   
             // $request->all(); //Procesa los datos del formulario

        $horaentrada =  $request->horaentrada;
        $horasalida = $request->horasalida;
      
        $idcuidador = $request->idcuidaor;
        $observaciones= $request->observaciones;
               
           $this->validate($request,[
                'nombre'=> ['regex:/^[A-Z][A-Z,a-z, , ñ,á,é,í,ó,ú]+$/'],
                'terminotx'=> ['regex:/^[A-Z][A-Z,a-z, , ñ,á,é,í,ó,ú]+$/'],
                'indicacion'=> ['regex:/^[A-Z][A-Z,a-z, , ñ,á,é,í,ó,ú]+$/'],
                'presen'=> ['regex:/^[A-Z][A-Z,a-z, , ñ,á,é,í,ó,ú]+$/'],
                'horario'=> ['regex:/^[A-Z][A-Z,a-z, , ñ,á,é,í,ó,ú]+$/']
         ]);
                $cui = new cuidadores;
                $cui->idcuidador = $request->idcuidador;
                $cui->horaentrada = $request->horaentrada;
                $cui->horasalida = $request->horasalida;
                $cui->idd= $request->idd;
                $cui->save();


              
                return redirect()->route('confirmacion');
    } 

    public function rsignos()
    {
        //INCREMENTA EL IDD PARA MOSTRAR EN LA VISTA    
        $clavesig =signos::withTrashed()->orderBy('ids','desc')
                                            ->take(1)
                                            ->get();
                                            if (count($clavesig)==0)
                                            {
                                                    $idsi = 1;
                                            }
                                            else
                                            {
                                       $idsi = $clavesig[0]->ids+1;
                                        }
                                                                   
      

        $turnos =turnos::withTrashed()->orderBy('idturno','asc')
                     
                          ->get();
            
        //return $carreras;
        return view ('vitalicia.rSignos')
                    ->with('idsi',$idsi)
                    ->with('turnos',$turnos);
    } 

      public function guardasignos(Request $request)
    {   
             // $request->all(); //Procesa los datos del formulario

        $ta =  $request->ta;
        $fc = $request->fc;
        $ids = $request->ids;
        $fr= $request->fr;
        $temp= $request->temp;
        $spo2= $request->spo2;
        $glucosa= $request->glucosa;
        $protesis= $request->protresis;
               
           $this->validate($request,[
                'nombre'=> ['regex:/^[A-Z][A-Z,a-z, , ñ,á,é,í,ó,ú]+$/'],
                'terminotx'=> ['regex:/^[A-Z][A-Z,a-z, , ñ,á,é,í,ó,ú]+$/'],
                'indicacion'=> ['regex:/^[A-Z][A-Z,a-z, , ñ,á,é,í,ó,ú]+$/'],
                'presen'=> ['regex:/^[A-Z][A-Z,a-z, , ñ,á,é,í,ó,ú]+$/'],
                'horario'=> ['regex:/^[A-Z][A-Z,a-z, , ñ,á,é,í,ó,ú]+$/']
         ]);
                $sig = new signos;
                $sig->ids = $request->ids;
                $sig->ta = $request->ta;
                $sig->fc = $request->fc;
                $sig->fr = $request->fr;
                $sig->temp = $request->temp;
                $sig->spo2 = $request->spo2;
                $sig->glucosa = $request->glucosa;
                $sig->protesis = $request->protesis;
                $sig->idturno= $request->idturno;
                $sig->save();


              
                return redirect()->route('confirmacion');
    } 
   
    

   public function getusuarios()

   {
  //$usuariosd = usuarios::withTrashed()->orderBy('idu','asc')->get();
 // return view ('vitalicia.cusuarios')
  //->with('usuariosd',$usuariosd);
   
       
    $usuariosd=\DB::select("SELECT u.idu,u.usuario,u.contrasena,u.correo,t.tipo as tip
        FROM usuarios AS u
        INNER JOIN tipos AS t ON t.idt =  u.idt");
	    return view ('vitalicia.cusuarios')
        ->with('usuariosd',$usuariosd);
       //return view('sistema.reporte')
	 // ->with('maestros',$getusu);    
   
   
   
   }
    
    
  
            
    
    
      //Catalogo alta de medicamentos
       public function cmedicamentos()
    {
        //INCREMENTA EL IDD PARA MOSTRAR EN LA VISTA    
        $cmedicalta =amedicamentos::withTrashed()->orderBy('idamedicamento','desc')
                                            ->take(1)
                                            ->get();

                                            if (count($cmedicalta)==0)
                                            {
                                                    $idamedica = 1;
                                            }
                                            else
                                            {
                                       $idamedica = $cmedicalta[0]->idamedicamento+1;
                                        }
    

             return view ('vitalicia.amedicamentos')
                    ->with('idamedica',$idamedica);
    } 
    
    public function gmedicamento(Request $request)
    {   
             // $request->all(); //Procesa los datos del formulario

        $idamedicamento = $request->idamedicamento;
        $nmedica =  $request->nmedica;
        $mpresen= $request->mpresen;
        
        $this->validate($request,[
                'nmedica'=> ['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
                'nmedica'=> 'required',
                'mpresen'=> ['regex:/^[A-Z][A-Z,a-z, , ñ,á,é,í,ó,ú]+$/'],
                'mpresen'=> 'required'
         ]);
               

                $amed = new amedicamentos;
                $amed->idamedicamento = $request->idamedicamento;
                $amed->nmedica = $request->nmedica;
                $amed->mpresen = $request->mpresen;    
                $amed->save();


              
                return redirect()->route('confirmacion');
    } 
    
    
    public function modificausua($idu)
    {
            $usuario = usuarios::where('idu','=',$idu)
                                 ->get();

           $idt= $usuario[0]->idt;
           $turnos = turnos::where('idturno','!=',$idt)->get();
                 //return $datosm;
            return view ('vitalicia.modusuarios')
            ->with('usuario',$usuario[0])
            ->with('idt',$idt)
            ->with('turnos',$turnos[0]->tipoturno);
    }
    
    public function guardamodificausua(Request $request)
    {
    $idu =  $request->idu;
    $usuario = $request->usuario;
    $contrasena= $request->contrasena;
    $correo= $request->correo;
    $idt = $request->idt;
    
  
    

            $usu = usuarios::find($idu);
            $usu->idu = $request->idu;
            
            $usu->usuario = $request->usuario;
            $usu->contrasena =$request->contrasena;
            $usu->correo= $request->correo;
            $usu->idt= $request->idt;
            $usu->save();
            return redirect()->route('confirmacion');
                   /* $proceso = "MODIFICA MAESTRO";
                    $mensaje = "REgistro ha sido modificado correctamente";
                    ->with('proceso',$proceso)
                    ->with('mensaje',$mensaje);*/
                    // echo "Listo para modificar";
    
}

public function eliminausu($idu)
	{
		  usuarios::find($idu)->delete();
		   // $proceso = "ELIMINAR MAESTROS";
		//	$mensaje = "El maestro ha sido desactivado Correctamente";
			//return view ('sistema.mensaje')
			return redirect()->route('confirmacion');
        }
        
        public function restaurusu($idu)
	{
	usuarios::withTrashed()->where('idu',$idu)->restore();
        return redirect()->route('confirmacion');
        }
        
     public function efisicausu($idu)
	{
		
   usuarios::withTrashed()->where('idu',$idu)->forceDelete();
   return redirect()->route('confirmacion');
    }

    public function getpacientes()

   {
  //$usuariosd = usuarios::withTrashed()->orderBy('idu','asc')->get();
 // return view ('vitalicia.cusuarios')
  //->with('usuariosd',$usuariosd);
   
       
  $pacientesd=\DB::select(" SELECT p.idpaciente,p.fechapaciente,
  CONCAT(d.nombre,' ',d.ap,' ',d.am)AS 'nombre',m.nombre AS medicamento,
  CONCAT(a.menu,' ',a.consumo)AS alimentacion,
  CONCAT(s.ta,' ',s.`fc`,' ',s.`fr`,' ',s.`temp`,' ',s.`spo2`,' ',s.`glucosa`,s.`protesis`)AS signos,
  g.valorg,v.act1
  FROM pacientes AS p
  INNER JOIN datos AS d  ON d.idd = p.idd
  INNER JOIN medicamentos AS m ON m.idmedicamento=p.idmedicamento
  INNER JOIN alimentaciones AS a ON a.idalimentacion=p.idalimentacion
  INNER JOIN signos AS s ON s.ids=p.ids
  INNER JOIN geriatricos AS g ON g.idgeriatricos=p.idgeriatricos
  INNER JOIN actividades AS v ON v.idactividades=p.idactividades");
	    return view ('vitalicia.cpacientes')
        ->with('pacientesd',$pacientesd);
       //return view('sistema.reporte')
	 // ->with('maestros',$getusu);    
   
   
   
   }

   public function cmedicamento()

   {
  //$usuariosd = usuarios::withTrashed()->orderBy('idu','asc')->get();
 // return view ('vitalicia.cusuarios')
  //->with('usuariosd',$usuariosd);
   
       
  $medicamentosm=\DB::select("SELECT m.`idmedicamento`,m.`nombre`,m.`indicacion`,m.`presen`,m.`terminotx`,h.`tipohorario`,am.`nmedica`
  FROM medicamentos AS m
  INNER JOIN horarios AS h ON h.idh=m.`idh`
  INNER JOIN amedicamentos AS am ON am.idamedicamento=m.`idamedicamento`");
	    return view ('vitalicia.cmedicamentos')
        ->with('medicamentosm',$medicamentosm);
         
   
   
   
   }

   public function eliminamedi($idmedicamento)
	{
		  medicamentos::find($idmedicamento)->delete();
		   // $proceso = "ELIMINAR MAESTROS";
		//	$mensaje = "El maestro ha sido desactivado Correctamente";
			//return view ('sistema.mensaje')
			return redirect()->route('confirmacion');
        }
        
        public function restauramedi($idmedicamento)
	{
                medicamentos::withTrashed()->where('idmedicamento',$idmedicamento)->restore();
        return redirect()->route('confirmacion');
        }
        
     public function efisicamedi($idmedicamento)
	{
		
                medicamentos::withTrashed()->where('idmedicamento',$idmedicamento)->forceDelete();
   return redirect()->route('confirmacion');
    }

    
    public function modificapac($idpaciente)
    {
            $paci = pacientes::where('idpaciente','=',$idpaciente)->get();
            $iddat= $paci[0]->iddat;
            $datos = datos::where('idd','=',$iddat)->get();
            $otrodato = datos::where('idd','!=',$iddat)->get();
              
        

            return view ('vitalicia.modpacientes')
            ->with('paci',$paci[0])
            ->with('iddat',$iddat)
            ->with('datos',$datos[0]->nombre)
            ->with('otrodato',$otrodato);
           
    }
    public function guardamodificapac(Request $request)
    {
    $idpaciente =  $request->idpacientes;
    $idd=$request->idd;
    $idmedicamento = $request->idmedicamento;
    $idalimentacion= $request->idalimentacion;
    $ids= $request->ids;
    $idgeriatricos = $request->idgeriatricos;
    $idactividades = $request->idactividades;
  
    

            $paci = pacientes::find($idpaciente);
            $paci->idd= $request->idd;
            $paci->idmedicamento = $request->idmedicamento;
            $paci->idalimentacion= $request->idalimentacion;
            $paci->ids= $request->ids;
            $paci ->idgeriatricos= $request->idgeriatricos;
            $paci->idactividades=$request->idactividades;
            $paci->save();
            return redirect()->route('confirmacion');
                   /* $proceso = "MODIFICA MAESTRO";
                    $mensaje = "REgistro ha sido modificado correctamente";
                    ->with('proceso',$proceso)
                    ->with('mensaje',$mensaje);*/
                    // echo "Listo para modificar";
    
}
}