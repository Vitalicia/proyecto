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
        $clavequesigue = datos::orderBy('idd','desc')
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
            $claveusu = usuarios::orderBy('idu','desc')
                                            ->take(1)
                                            ->get();
            $idus= $claveusu[0]->idu+1;
               
               
               
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


                return redirect()->route('rpac');
    } 
    
      public function gusuario(Request $request)
    {   
            $request->all(); //Procesa los datos del formulario
            
        
                $usu = new usuarios;
                $usu->idu = $request->idu;
                $usu->usuario = $request->usuario;
                $usu->contrasena = $request->contrasena;   
                $usu->idt = $request->idt;
                $usu->save();


                return redirect()->route('home');
    }     

    public function rmedicamento()
    {
        //INCREMENTA EL IDD PARA MOSTRAR EN LA VISTA    
        $clavequesiguem =medicamentos::orderBy('idmedicamento','desc')
                                            ->take(1)
                                            ->get();
        $iddm= $clavequesiguem[0]->idmedicamento+1;

        $horarios = horarios::orderBy('tipohorario','asc')
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


    
}
