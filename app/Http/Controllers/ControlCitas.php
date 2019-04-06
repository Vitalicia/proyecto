<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Mail;
use App\citas;
use App\chorarios;
use App\thoras;

class ControlCitas extends Controller
{


        function cita()
        {
             $clavequesigue = citas::orderBy('idcitas','desc')
                                    ->take(1)->get();
             $cuantos = count($clavequesigue);
             if($cuantos==0)
             {
                 $idcitas= 1;
             }
             else
             {
              $idcitas = $clavequesigue[0]->idcitas+1;   
             }

             $chorarios = chorarios::all();
         return view('vitalicia.agendar')
          ->with('chorarios',$chorarios)
          ->with('idcitas',$idcitas);
        }


        function combocahorario(Request $request)
        {
             $idhc = $request->get('idhc');
             $thoras = thoras::where('idhc','=',$idhc)->get();
             return view ('vitalicia.comboh')
                ->with('thoras',$thoras);
        }

        function confirma(Request $request)
    {

            
                $request->all();
            
                
            
                
                $ci = new citas;
                $ci->idcitas = $request->idcitas;
                $ci->fecha = $request->fecha;
                $ci->hora =$request->idhora;
                $ci->horaturno= $request->idhc;
                $ci->persona= $request->persona;
                $ci->parentesco= $request->parentesco;
                $ci->appotro= $request->appotro;
                $ci->apmotro= $request->apmotro;
                $ci->nombreotro= $request->nombreotro;
                $ci->direotro= $request->direotro;
                $ci->cpotro= $request->cpotro;
                $ci->ciudadotro= $request->ciudadotro;
                $ci->municipiootro= $request->municipiootro;
                $ci->telotro= $request->telotro;
                $ci->correootro= $request->correootro;
                $ci->atencion= $request->atencion;
                $ci->folio= $request->folio;
                $ci->trato= $request->trato;
                $ci->app= $request->app;
                $ci->apm= $request->apm;
                $ci->nombrepaciente= $request->nombrepaciente;
                $ci->direccion= $request->direccion;
                $ci->ciudad= $request->ciudad;
                $ci->estado= $request->estado;
                $ci->cp= $request->cp;
                $ci->tlpaciente= $request->tlpaciente;
                $ci->sexo= $request->sexo;
                $ci->fnacimiento= $request->fnacimiento;
                $ci->motivo= $request->motivo;
                $ci->save();
            
            
             return redirect()->route('citas');
    }
    
    
    
    
    
}

    

