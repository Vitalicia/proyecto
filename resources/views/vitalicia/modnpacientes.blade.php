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

            

        <input type="submit" class="button" value="Guardar">
        <input type="reset" class="button alert" value="Borrar">
        </form>
@stop