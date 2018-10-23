<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\formValidation;
use App\tipos;
use App\datos;
use App\usuarios;

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
            $idus= $claveusu[1]->idu+1;
               
               
               
            $tipos = tipos::where('activo','=','SI')
                                    ->orderBy('tipo','asc')
                                    ->get();
            return view ('vitalicia.usuario')
                ->with('tipos',$tipos);
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
           // $request->all(); //Procesa los datos del formulario
            
        
                $usu = new usuarios;
                $usu->idu = $request->idus;
                $usu->usuario = $request->usuario;
                $usu->contrasena = $request->contrasena;   
                $usu->idt = $request->idt;
                $usu->save();


                return redirect()->route('home');
    } 
    
    
}
