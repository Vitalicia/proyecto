@extends('vitalicia.principal')
@section('encabezado')
<h2 class="subheader">Modificar el seguimineto de Pacientes</h2>
<br>
@stop
@section('form1')
        <form action="{{route('guardamodifinpacientes')}}" method = "POST" enctype="multipart/form-data" >
            {{csrf_field()}}
            
          
<!--Clave--><input type = 'text' name = 'idnp' value="{{$mnpacientes->idnp}}" readonly ='readonly' style='visibility:hidden'>


        Paciente<select name = 'idu'>
        <option value = '{{$idu}}'>{{$otrousario}}</option>
        @foreach($ursu as $otu)
        <option value = '{{$otu->idu}}'>{{$otu->usuario}}</option>
      @endforeach
      </select>

      

Actividad1<input type = 'text' name = 'actividad1' value="{{$mnpacientes->actividad1}}">

Hora1<input type = 'time' name = 'hora1' value="{{$mnpacientes->hora1}}">

Actividad2<input type = 'text' name = 'actividad2' value="{{$mnpacientes->actividad2}}">

Hora2<input type = 'time' name = 'hora2' value="{{$mnpacientes->hora2}}">

Actividad3<input type = 'text' name = 'actividad3' value="{{$mnpacientes->actividad3}}">

Hora3<input type = 'time' name = 'hora3' value="{{$mnpacientes->hora3}}">

Menu<input type = 'text' name = 'menu' value="{{$mnpacientes->menu}}">

Consumo<input type = 'text' name = 'consumo' value="{{$mnpacientes->consumo}}">

@stop
@section('form2')

Observaciones<input type = 'text' name = 'observaciones' value="{{$mnpacientes->observaciones}}">

Hora de Comida<input type = 'time' name = 'horacomida' value="{{$mnpacientes->horacomida}}">

Tipo de Comida<input type = 'text' name = 'tipocomida' value="{{$mnpacientes->tipocomida}}">

Geriatrico 1<input type = 'text' name = 'tgeriatrico1' value="{{$mnpacientes->tgeriatrico1}}">

Geriatrico 2<input type = 'text' name = 'tgeriatrico2' value="{{$mnpacientes->tgeriatrico2}}">

Geriatrico 3<input type = 'text' name = 'tgeriatrico3' value="{{$mnpacientes->tgeriatrico3}}">

TA<input type = 'text' name = 'ta' value="{{$mnpacientes->ta}}">

FC<input type = 'text' name = 'fc' value="{{$mnpacientes->fc}}">

FR<input type = 'text' name = 'fr' value="{{$mnpacientes->fr}}">

Temp<input type = 'text' name = 'temp' value="{{$mnpacientes->temp}}">

@stop

@section('form3')

Spo2<input type = 'text' name = 'spo2' value="{{$mnpacientes->spo2}}">

Glucosa<input type = 'text' name = 'glucosa' value="{{$mnpacientes->glucosa}}">

Protesis<input type = 'text' name = 'protesis' value="{{$mnpacientes->protesis}}">

Cuidador<input type = 'text' name = 'cuidadornombre' value="{{$mnpacientes->cuidadornombre}}">

Fecha Cuidador<input type = 'date' name = 'fechacuidador' value="{{$mnpacientes->fechacuidador}}">




Medicamento<select name = 'idamedicamento'>
        <option value = '{{$idamedicamento}}'>{{$medi}}</option>
        @foreach($otromedic as $otme)
        <option value = '{{$otme->idamedicamento}}'>{{$otme->nmedica}}</option>
      @endforeach
</select>

      Indicacion<input type = 'text' name = 'amindicacion' value="{{$mnpacientes->amindicacion}}">


      Presentacion<input type = 'text' name = 'ampresen' value="{{$mnpacientes->ampresen}}">

        <input type="submit" class="button" value="Guardar">
        <input type="reset" class="button alert" value="Borrar">
        </form>
@stop