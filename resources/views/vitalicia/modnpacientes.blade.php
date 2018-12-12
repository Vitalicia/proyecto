@extends('vitalicia.principal')
@section('encabezado')
<h2 class="subheader">Modificar el seguimineto de Pacientes</h2>
<br>
@stop
@section('form1')
        <form action="{{route('guardamodifinpacientes')}}" method = "POST" enctype="multipart/form-data" >
            {{csrf_field()}}
            

            Clave<input type = 'text' name = 'idnp' value="{{$mnpacientes->idnp}}" readonly ='readonly'>
<br>
            <br>
            Paciente<select name = 'idu'>
      <option value = '{{$idu}}'>{{$usuarios}}</option>
	  @foreach($otrousario as $otu)
	   <option value = '{{$otu->idu}}'>{{$otu->usuario}}</option>
	  @endforeach
      </select>
            <br>
           
            
            
            

            <b>Indicaci&oacute;n</b>
            @if($errors->first('amindicacion')) 
            <br>{!! $errors->first('amindicacion','<span class=error>:message</span>')!!}
            @endif
            <input type = 'text' name = 'amindicacion' value="{{$mnpacientes->amindicacion}}">
            <br>
                <b>Presentación</b>
            @if($errors->first('ampresen')) 
            <br>{!! $errors->first('ampresen','<span class=error>:message</span>')!!}
            @endif
            <input type = 'text' name = 'amindicacion' value="{{$mnpacientes->ampresen}}">
               
                <b>Actividad 1</b>
            <br>{!! $errors->first('actividad1','<span class=error>:message</span>')!!}
                <input type="text" name="actividad1" value=" {{$mnpacientes->actividad1}}">
               

                <b>Hora de la Actividad 1</b>
            <br>{!! $errors->first('hora1','<span class=error>:message</span>')!!}
                <input type="time" name="hora1" value="{{$mnpacientes->hora1}}">

                <b>Actividad 2</b>
            <br>{!! $errors->first('actividad2','<span class=error>:message</span>')!!}
                <input type="text" name="actividad2" value="{{$mnpacientes->actividad2}}">

                <b>Hora de la Actividad 2</b>
            <br>{!! $errors->first('hora2','<span class=error>:message</span>')!!}
                <input type="time" name="hora2" value="{{$mnpacientes->hora2}}">

                <b>Actividad 3</b>
            <br>{!! $errors->first('actividad3','<span class=error>:message</span>')!!}
                <input type="text" name="actividad3" value="{{$mnpacientes->actividad3}}">

                <b>Hora de la Actividad 3</b>
            <br>{!! $errors->first('hora3hora3','<span class=error>:message</span>')!!}
                <input type="time" name="hora3" value="{{$mnpacientes->hora3}}">

            
                

            
            <input type="text" name='idnp' value="" readonly= 'readonly' style='visibility:hidden'>
@stop
@section('form2')               
                <b>Comida (Men&uacute;) </b>
            <br>{!! $errors->first('menu','<span class=error>:message</span>')!!}
                <input type="text" name="menu" value="{{$mnpacientes->menu}}">
            
                <b>Consumo</b>
            <br>{!! $errors->first('consumo','<span class=error>:message</span>')!!}
                <input type="text" name="consumo" value="{{$mnpacientes->consumo}}">
                
                <b>Observaciones</b> 
            <br>{!! $errors->first('observaciones','<span class=error>:message</span>')!!}
                <input type="text" name="observaciones" value="{{$mnpacientes->observaciones}}">

                <b>Hora de Comida</b>
            <br>{!! $errors->first('horacomida','<span class=error>:message</span>')!!}
                <input type="time" name="horacomida" value="{{$mnpacientes->horacomida}}">
            
                <b>Tipo de Comida</b> 
            @if($errors->first('tipocomida')) 
            <br>{!! $errors->first('tipocomida','<span class=error>:message</span>')!!}
            @endif
            <input type="time" name="horacomida" value="{{$mnpacientes->tipocomida}}">
                
                 
                <b>Geri&aacute;trico 1</b> 
            @if($errors->first('tgeriatrico1')) 
            <br>{!! $errors->first('tgeriatrico1','<span class=error>:message</span>')!!}
            @endif
            <input type="time" name="horacomida" value="{{$mnpacientes->tgeriatrico1}}">

                
                <b>Geri&aacute;trico 2</b> 
            @if($errors->first('tgeriatrico2')) 
            <br>{!! $errors->first('tgeriatrico2','<span class=error>:message</span>')!!}
            @endif
            <input type="time" name="horacomida" value="{{$mnpacientes->tgeriatrico2}}">

                
                <b>Geri&aacute;trico 3</b> 
            @if($errors->first('tgeriatrico3')) 
            <br>{!! $errors->first('tgeriatrico3','<span class=error>:message</span>')!!}
            @endif
            <input type="time" name="horacomida" value="{{$mnpacientes->tgeriatrico3}}">

               
                
                <b>ta</b>
            <br>{!! $errors->first('ta','<span class=error>:message</span>')!!}
                <input type="text" name="ta" value="{{$mnpacientes->ta}}">
            
                <b>fc</b>
            <br>{!! $errors->first('fc','<span class=error>:message</span>')!!}
                <input type="text" name="fc" value="{{$mnpacientes->fc}}">
@stop
@section('form3')                
                        
                <b>fr</b>
            <br>{!! $errors->first('fr','<span class=error>:message</span>')!!}
                <input type="text" name="fr" value="{{$mnpacientes->fr}}">
                
                <b>Temp</b>
            <br>{!! $errors->first('temp','<span class=error>:message</span>')!!}
                <input type="text" name="temp" value="{{$mnpacientes->temp}}">
                
                <b>Spo2</b> 
            <br>{!! $errors->first('spo2','<span class=error>:message</span>')!!}
                <input type="text" name="spo2" value="{{$mnpacientes->spo2}}">
            
                <b>Glucosa</b>
            <br>{!! $errors->first('glucosa','<span class=error>:message</span>')!!}
                <input type="text" name="glucosa" value="{{$mnpacientes->glucosa}}">

                <b>Pr&oacute;tesis</b>
            <br>{!! $errors->first('protesis','<span class=error>:message</span>')!!}
                <input type="text" name="protesis" value="{{$mnpacientes->protesis}}">
                
                <b>Nombre del Cuidador</b>
            <br>{!! $errors->first('cuidadornombre','<span class=error>:message</span>')!!}
                <input type="text" name="cuidadornombre" value="{{$mnpacientes->cuidadornombre}}">
                
                <b>Fecha de Registro </b>
            <br>{!! $errors->first('fechacuidador','<span class=error>:message</span>')!!}
                <input type="text" name="fechacuidador" value="{{$mnpacientes->fechacuidador}}">

        <input type="submit" class="button" value="Guardar">
        <input type="reset" class="button alert" value="Borrar">
        </form>
@stop