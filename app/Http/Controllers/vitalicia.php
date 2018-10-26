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



class vitalicia extends Controller
{
    //INICIO
       public function home()
    {
            return view ('vitalicia.home');
    } 
    
    //USUARIOS
       public function rUsuario()
    {
        //INCREMENTA EL IDD PARA MOSTRAR EN LA VISTA    
        $clavequesigue = datos::withTrashed()->orderBy('idd','desc')
                                            ->take(1)
                                            ->get();
        $idds= $clavequesigue[0]->idd+1;
            
        //return $carreras;
        return view ('vitalicia.rUsuario')
                    ->with('idds',$idds);
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
                $dat->save();


                return redirect()->route('usu');
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


                return redirect()->route('home');
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
                          ->take(2)
                          ->get();
            
        //return $carreras;
        return view ('vitalicia.rMedicamentos')
                    ->with('iddm',$iddm)
                    ->with('horarios',$horarios);
    } 

    public function guardamedicamento(Request $request)
    {   
             // $request->all(); //Procesa los datos del formulario

        $nombre =  $request->nombre;
        $indicacion = $request->indicacion;
        $presen= $request->presen;
        $idmedicamento = $request->idmedicamento;
        $terminotx= $request->terminotx;
               
           $this->validate($request,[
                'nombre'=> ['regex:/^[A-Z][A-Z,a-z, , ñ,á,é,í,ó,ú]+$/'],
                'terminotx'=> ['regex:/^[A-Z][A-Z,a-z, , ñ,á,é,í,ó,ú]+$/'],
                'indicacion'=> ['regex:/^[A-Z][A-Z,a-z, , ñ,á,é,í,ó,ú]+$/'],
                'presen'=> ['regex:/^[A-Z][A-Z,a-z, , ñ,á,é,í,ó,ú]+$/'],
                'horario'=> ['regex:/^[A-Z][A-Z,a-z, , ñ,á,é,í,ó,ú]+$/']
         ]);
                $med = new medicamentos;
                $med->idmedicamento = $request->idmedicamento;
                $med->nombre = $request->nombre;
                $med->indicacion = $request->indicacion;
                $med->presen = $request->presen;    
                $med->terminotx = $request->terminotx;
                $med->idh= $request->idh;
                $med->save();


              
                return redirect()->route('home');
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


              
                return redirect()->route('home');
    } 
    public function getdatos()

    {
   $datosd = datos::withTrashed()->orderBy('idd','asc')->get();
   return view ('vitalicia.cdatos')
   ->with('datosd',$datosd);
   
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
        $idvg = $request->idvg;
      
       
               
           
                $ger = new geriatricos;
                $ger->idgeriatricos = $request->input('idvgeriatricos');
                $ger->valorg = $request->input('valorg');
                $ger->valorg1 = $request->input('valorg1');
                $ger->valorg2 = $request->input('valorg2');  
                $ger->idvg= $request->input('idvg');
                $ger->save();

                return redirect()->route('home');
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


              
                return redirect()->route('home');
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


              
                return redirect()->route('home');
    } 
   
    public function getpacientes()

    {
   $pacientesd = datos::withTrashed()->orderBy('idpaciente','asc')->get();
   return view ('vitalicia.cpacientes')
   ->with('pacientesd',$pacientesd);
   
   }


}
