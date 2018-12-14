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

      

Actividad1<input type = 'text' name = 'actividad1' value="{{$mnpacientes->actividad1}}">

Hora1<input type = 'time' name = 'hora1' value="{{$mnpacientes->hora1}}">

Actividad2<input type = 'text' name = 'actividad2' value="{{$mnpacientes->actividad2}}">

Hora2<input type = 'time' name = 'hora2' value="{{$mnpacientes->hora2}}">

Actividad3<input type = 'text' name = 'actividad3' value="{{$mnpacientes->actividad3}}">

Hora3<input type = 'time' name = 'hora3' value="{{$mnpacientes->hora3}}">


        <input type="submit" class="button" value="Guardar">
        <input type="reset" class="button alert" value="Borrar">
        </form>
@stop