@extends('vitalicia.principal3')
@section('micabeza')

<head>

    
</head>
<font color="D133FF"><h1>Certificados</h1></font>
@stop
@section('form4')
<?php

$hora=date("h:i:s");
$fecha=date("Y/n/j");

?>

<script type="text/javascript">
$(document).ready(function(){
 
    function trunc (x, posiciones = 0) {
  var s = x.toString()
  var l = s.length
  var decimalLength = s.indexOf('.') + 1
  var numStr = s.substr(0, decimalLength + posiciones)
  return Number(numStr)
}
    
$('#idpapi').hide();
$('#idpa').hide();
$('#idpa1').hide();
$('#idpa2').hide();
$('#idpa3').hide();
$('#tipa').hide();
$('.obser').hide();
       
    
      
       
      // $("#idu").click(function() {
      //$("#idpa").load('{{url('datusua')}}' + '?idu=' + this.options[this.selectedIndex].value) ;
       $("#idcuidador").click(function() {
       $('#idpapi').show(); 
       $("#idpa").show();
       $("#idpa1").show();
       $("#idpa2").show();
       $("#idpa3").show();
       $("#visual").val("");
       $("#paciente").val("");
       $("#edad").val("");
       $("#sexo").val("");
       $("#peso").val("");
       $("#talla").val("");
       $("#ta").val("");
       $("#fc").val("");
       $("#fr").val("");
       $("#sang").val("");
       $('#ale').val("");
       $('#obs').val("");
       
       
      
       });

      
       
            
      
    /*$("#paciente").keyup(function () {
        var value = $(this).val();
        $("#visual").val(value);
    });*/
    
    
    
    
        $("input[name=alergia]").click(function () {
        switch ($('input:radio[name=alergia]:checked').val()) { 

      case 'Si': 
        
        $('#tipa').show();
        $('.obser').show();
      //  $('#ob').remove();

      break;
      case 'No': 

       $('#tipa').hide();
       $('.obser').show();
     //$('#al').remove();
      break;

          }
        });
        
      });
        
        
        
</script>


<form action="{{route('guardatosdel')}}" method = "POST" enctype="multipart/form-data" >
            {{csrf_field()}}

        
              
        
            Hora 
            <br>{!! $errors->first('','<span class=error>:message</span>')!!}
            <input type = 'time' name = 'hora' id="hora" value="{{$hora }}" readonly = 'readonly'>

            @stop
            @section('form5')

            Fecha 
           <br>{!! $errors->first('','<span class=error>:message</span>')!!}
           <input type = 'text' name = 'fecha' id="fecha" value="{{$fecha}}" readonly = 'readonly'>
           
            @stop
            

            
            @section('form6')

            
            <br>
              
            Clave de datos
        
            <input type="text" name="iddd" id="iddd" value='{{$iddd}}'readonly = 'readonly'> 
            
                        
                        
            @stop


            @section('form6.1')

            Licenciado(a)
            <br>
              
            <select name = 'idcuidador' id="idcuidador">
            @foreach($clavedoc as $cdoc)
            <option value = '{{$cdoc->idcuidador}}'>{{$cdoc->nombre}}</option>
            @endforeach
                        </select>
                        
            @stop

            @section('form6.2')
            <br>
           <div id="idpapi" value="">

           <b>* Paciente: <input type='text' name='paciente' id='paciente' value='' ></b>

           </div>
            @stop
            
            @section('form7')
            <br>
           <div id="idpa">

           <b>* Edad: <input type='text' name='edad' id='edad' value=''></b>
           
           <b>* TA: <input type='text' name='ta' id='ta'></b>
           </div>
            @stop

            @section('form7.1')
            <br>
           <div id="idpa1">

           <b>* Sexo: <input type='text' name='sexo' id='sexo'>
           
           </b><b>* FC: <input type='text' name='fc' id='fc'></b>

           </div>
            @stop

            @section('form7.2')
            <br>
           <div id="idpa2">

           <b>* Talla: <input type='text' name='talla' id='talla'></b>
           
           <b>* FR: <input type='text' name='fr' id='fr'></b>

           </div>
            @stop
            
            @section('form7.3')
            <br>
           <div id="idpa3">

           <b>* Peso: <input type='text' name='peso' id='peso'></b>

           </div>
            @stop
           
            @section('form8') <!-- DATOS DEL PACIENTE -->

            <div id='datospa'>

          
          </div>


            @stop

            @section('form9')

            
            Grupo Sanguineo
              
            @if($errors->first('')) 

            <br>{!! $errors->first('','<span class=error>:message</span>')!!}
            @endif
              
                  <select name="sang" id="sang">
                  
                  <option value="default"></option>
                  <option value="A+">A+</option>
                  <option value="O+">O+</option>
                  <option value="B+">B+</option>
                  <option value="AB+">AB+</option>
                  <option value="A-">A-</option>
                  <option value="O-">O-</option>
                  <option value="B-">B-</option>
                  <option value="AB-">AB-</option>
                 
                </select>

            @stop
           

            @section('form10')

            Agudez visual
            
            <br>{!! $errors->first('','<span class=error>:message</span>')!!}
                <input type="text" name="visual" id="visual" value="">  

              
                           
                           
            @stop



            @section('form11')

            Alergia
            &nbsp;&nbsp;
            
                <input type="radio" name="alergia" value="Si" id="aler1" >Si
              
               &nbsp;&nbsp;&nbsp;&nbsp;    
                
                <input type="radio" name="alergia" value="No" id="aler2" >No
                           
            @stop
               
            @section('form12')

            <div id="tipa">

            <div id='al'><b>Tipo de Alergia:<input type= 'text' name='alerg' id="ale"></b></div>

            </div>
          
            @stop
 
            @section('form13')
            
           <div class="obser">

           <div id='ob'><b>Observaciones:<textarea name='comentarios'  id="obs"rows='2' cols='40'placeholder="Escribe aquí tus comentarios"></textarea></b></div>

           </div>

            @stop
              
            @section('form14')

            <br>
           <h2> Imprimir certificado  <input type=image src="../public/pdf.png" width="80" height="80"> </h2>
            
            @stop

            @section('form15')
            <br>
            

            <input type="submit" class="button" value="Guardar">
           

            @stop

            @section('form16')
            <br>
            <div id="guard">

            </div>

            </form>
            @stop



