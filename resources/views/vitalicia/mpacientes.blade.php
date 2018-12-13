@extends('vitalicia.principal')
@section('encabezado')
<h2 class="subheader">Modificar mis Pacientes</h2>
<br>
@stop
@section('form1')
        <form action="{{route('guardamodifimispa')}}" method = "POST" enctype="multipart/form-data" >
            {{csrf_field()}}
            
         
<!--Clave--><input type = 'text' name = 'idpaciente' value="{{$pacientesb->idpaciente}}" readonly ='readonly' style='visibility:hidden'>


Pacientes<input type="text" name="pacientes" value="{{$pacientesb->pacientes}}">

Fecha<input type="text" name="fechapaciente" value="{{$pacientesb->fechapaciente}}">

    

        Actividad1 Hora1<select name = 'idactividades'>
      <option value = '{{$idactividades}}'>{{$otrod}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$ahora1}}</option>
	  @foreach($otrodato as $oc)
	   <option value = '{{$oc->idactividades}}'>{{$oc->act1}}&nbsp;&nbsp;&nbsp;{{$oc->hora1}}</option>
	  @endforeach
      </select>
      
      
      
      @stop

      @section('form2')

      Menu <select name = 'idalimentacion'>
      <option value = '{{$idalimentacion}}'>{{$alim}}</option>
	  @foreach($otral as $ome)
	   <option value = '{{$ome->idalimentacion}}'>{{$ome->menu}}</option>
	  @endforeach
      </select>

      Consumo <select name = 'idalimentacion'>
      <option value = '{{$idalimentacion}}'>{{$cons}}</option>
	  @foreach($otral as $ome)
	   <option value = '{{$ome->idalimentacion}}'>{{$ome->consumo}}</option>
	  @endforeach
      </select>

      Observaciones <select name = 'idalimentacion'>
      <option value = '{{$idalimentacion}}'>{{$obsr}}</option>
	  @foreach($otral as $ome)
	   <option value = '{{$ome->idalimentacion}}'>{{$ome->Observaciones}}</option>
	  @endforeach
      </select>

        <input type="submit" class="button" value="Guardar">
        <input type="reset" class="button alert" value="Borrar">
        </form>
@stop