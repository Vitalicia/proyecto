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


        <b>Nombre</b>
  
	  @foreach($otrodato as $od)
    <input type ="text" name="nombre" value='{{$od->nombre}}'>
    @endforeach
      
      

        

      
        <input type="submit" class="button" value="Guardar">
        <input type="reset" class="button alert" value="Borrar">
        </form>
@stop