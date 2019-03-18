@extends('vitalicia.principal3')
@section('micabeza')
<head>




    
</head>
<font color="D133FF"><h1>Certificados</h1></font>
@stop
@section('form4')
<?php

$hora=date("h:i:s");
$fecha=date("j/n/Y");

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
    
   
       
        $("#idp").click(function() {
       $("#datospa").load('{{url('datusua')}}' + '?idu=' + this.options[this.selectedIndex].value) ;
       });
       
      
	
    
        $("input[name=alergia]").click(function () {
        switch ($('input:radio[name=alergia]:checked').val()) { 

      case 'Si': 
        
        $('#tipalergia').html("<div id='al'><b>Tipo de Alergia:<input type= 'text' name='alerg'></b></div>");
        $('.obser').html("<div id='otob'><b>Observaciones:<textarea name='comentarios' rows='2' cols='40'>Escribe aquí tus comentarios</textarea></b></div>");
        $('#ob').remove();
      break;
      case 'No': 

    $('.obser').html("<div id='ob'><b>Observaciones:<textarea name='comentarios' rows='2' cols='40'>Escribe aquí tus comentarios</textarea></b></div>");
    $('#otob').remove();
    $('#al').remove();
      break;

          }
        });


      

      });
        
        
        
</script>


        <form>
              
        
            Hora 
            <br>{!! $errors->first('','<span class=error>:message</span>')!!}
            <input type = 'time' name = 'hora'  value="{{$hora }}" readonly = 'readonly'>

            @stop
            @section('form5')

            Fecha 
           <br>{!! $errors->first('','<span class=error>:message</span>')!!}
           <input type = 'text' name = 'fecha'  value="{{$fecha}}" readonly = 'readonly'>
           
            @stop

            @section('form6')

            Doctor (a)
            <br>
              
            <select name = 'doctor'>
            @foreach($clavedoc as $cdoc)
            <option value = '{{$cdoc->iddoctor}}'>{{$cdoc->nombre}}</option>
            @endforeach
                        </select>
                        
            @stop

            
            @section('form7')
            <br>
            Nombre
            <br>

            <select name = 'idp' id='idp'>
            @foreach($pausu as $ps)
            <option value = '{{$ps->idu}}'>{{$ps->usuario}}</option>
            @endforeach
            
                </select>
                <br><br>
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
              
                  <select name="sangre" id="sang">
                  
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
                <input type="text" name="visual" value="">  
                           
            @stop



            @section('form11')

            Alergia
            &nbsp;&nbsp;
            
                <input type="radio" name="alergia" value="Si" id="aler1" >Si
              
               &nbsp;&nbsp;&nbsp;&nbsp;    
                
                <input type="radio" name="alergia" value="No" id="aler2" >No
                           
            @stop


            
            @section('form12')

            <div id="tipalergia">
           
            </div>


            @stop

            
            
            @section('form13')

            
           
            
           <div class="obser">

           </div>
            @stop
            

              
            @section('form14')

            <br><br>
           <h2> Imprimir certificado  <input type=image src="../public/pdf.png" width="80" height="80"> </h2>
           
           


            @stop
            

           
           
        </form>
