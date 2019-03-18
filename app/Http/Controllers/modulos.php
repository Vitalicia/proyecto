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
use App\doctores;
use App\turnos;
use App\signos;
use App\pacientes;
use App\amedicamentos;
use App\actividades;
use App\npacientes;
use Session;




class modulos extends Controller
{
    public function certificado()
    {
        if( Session::get('sesionidu')!="")
     {
            return view ('vitalicia.modugeneral');
     }
    else
     {
         Session::flash('error', 'Favor de loguearse antes de 
    continuar');
     return redirect()->route('login');
     }
    }

public function cdoctor()
    {
        if( Session::get('sesionidu')!="")
		 {
            $clavedoc =doctores::withTrashed()->orderBy('iddoctor','desc')
           
            ->get();
 

            $pausu = usuarios::where('idt','=','4')->orderBy('usuario','desc')
            ->get();

            return view ('vitalicia.modugeneral')

            ->with('pausu',$pausu)
            ->with('clavedoc',$clavedoc);
        
                   
       }
        else
		 {
			 Session::flash('error', 'Favor de loguearse antes de 
		continuar');
		 return redirect()->route('login');
		 }
    } 

  
    function datusua(Request $request)
    {
        $idu = $request->get('idu');
        
        $usuarios = usuarios::where('idu','=',$idu)->get();

        $dapacientes = npacientes::where('idu','=',$idu)->get();

        return view ('vitalicia.combop')

        ->with('dapacientes',$dapacientes[0])
        ->with('usuarios',$usuarios[0]);
        //echo "$idp";
    }
}