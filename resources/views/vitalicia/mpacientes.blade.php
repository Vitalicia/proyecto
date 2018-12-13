@extends('vitalicia.principal')
@section('encabezado')
<h2 class="subheader">Modificar mis Pacientes</h2>
<br>
@stop
@section('form1')
        <form action="{{route('guardamodifimispa')}}" method = "POST" enctype="multipart/form-data" >
            {{csrf_field()}}
            
         
            Clave<input type = 'text' name = 'idpaciente' value="{{$pacientesb->idpaciente}}" readonly ='readonly'>
<br>
    
    Fecha<input type="text" name="fechapaciente" value="{{$pacientesb->fechapaciente}}">

    Nombre<input type="text" name="nombre" value="{{$pacientesb->pacientes}}">



      <!--  <b>Nombre</b>
        <select name = 'idd'>
     
	  @foreach($otrod as $od)
	   <option value = '{{$od->idd}}'>{{$od->nombre}}</option>
	  @endforeach
      </select>-->
      <br>
      
      
        <input type="submit" class="button" value="Guardar">
        <input type="reset" class="button alert" value="Borrar">
        </form>
@stop