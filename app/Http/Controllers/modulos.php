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
use App\npacientes;
use App\datosdetalles;

use Session;




class modulos extends Controller
{
    
        //INICIO
        public function confirmacion2()
        {
                if( Session::get('sesionidu')!="")
             {
                    return view ('vitalicia.confirmacion2');
             }
            else
             {
                 Session::flash('error', 'Favor de loguearse antes de 
            continuar');
             return redirect()->route('login');
             }
        }
        
        
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

    //funcion para obtener el doctor,el usuario de tipo paciente.

public function cdoctor()
    {
        if( Session::get('sesionidu')!="")
		 {

            $clavequesigue = datosdetalles::withTrashed()->orderBy('iddd','desc')
								->take(1)->get();
         $cuantos = count($clavequesigue);
         if($cuantos==0)
         {
             $iddd= 1;
         }
         else
         {
          $iddd = $clavequesigue[0]->iddd+1;   
         }

            $clavedoc =cuidadores::withTrashed()->orderBy('idcuidador','desc')
           
            ->get();
 

            $pausu = usuarios::where('idt','=','4')->orderBy('usuario','desc')
            ->get();

            return view ('vitalicia.modugeneral')

            ->with('iddd',$iddd)
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

    //funcion para obtener el id del usuario seleccionado y compararlo con el de la BD 
    // obtner los datos de los pacientes
  
    function datusua(Request $request)
    {
       // $idu = $request->get('idu');
        
       // $usuarios = usuarios::where('idu','=',$idu)->get();

    //    $dapacientes = npacientes::where('idu','=',$idu)->get();

        return view ('vitalicia.modotro');

      //  ->with('dapacientes',$dapacientes[0])
    //    ->with('usuarios',$usuarios[0]);
        //echo "$idp";
    }

    // guardar datosdell

    function guardatosdel(Request $request)
    {

            $exist = $request->alerg;

            if($exist!="")
            {	 
                $exist = $request->alerg;
            }
            else
            {
                $exist = "Ninguna";
            }
       
            $detall = new datosdetalles;
            $detall->iddd = $request->iddd;
            $detall->idcuidador = $request->idcuidador;
            $detall->fecha = $request->fecha;
            $detall->hora = $request->hora;
            $detall->paciente = $request->paciente;
            $detall->edad = $request->edad;
            $detall->sexo = $request->sexo;
            $detall->talla = $request->talla;
            $detall->peso = $request->peso;
            $detall->ta = $request->ta;
            $detall->fc = $request->fc;
            $detall->fr = $request->fr;
            $detall->grupsan = $request->sang;
            $detall->aguvi = $request->visual;
            $detall->alergia = $request->alergia;
            $detall->tipalergia = $exist;
            $detall->observaciones = $request->comentarios;
            $detall->save();
 
            return redirect()->route('confirmacion2');
            //return view ('vitalicia.modugeneral');
       
       //echo "$detall";
       
    
         
       
    }
}