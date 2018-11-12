@extends('vitalicia.principal')
@section('encabezado')
<h1>Consulta de datos</h1>
@stop
@section('complete')

        <div style="overflow-x:auto;">
<table border= 1>
<tr><td>ID</td><td>Nombre</td><td>Apellido Paterno</td>
<td>Apellido materno</td><td>Edad</td><td>Telefono</td>
<td>Calle</td><td>Numero</td><td>Calle1</td><td>Calle2</td>
<td>Colonia</td><td>Municipio</td><td>Ciudad</td><td>Cp</td>
<td>Referencia</td>
<td>Operaciones</td>

@foreach($datosd as $datt)


<tr><td>{{$datt->idd}}</td>
<td>{{$datt->nombre}}</td>
<td>{{$datt->ap}}</td>
<td>{{$datt->am}}</td>
<td>{{$datt->edad}}</td>
<td>{{$datt->telefono}}</td>
<td>{{$datt->calle}}</td>
<td>{{$datt->numero}}</td>
<td>{{$datt->calle1}}</td>
<td>{{$datt->calle2}}</td>
<td>{{$datt->colonia}}</td>
<td>{{$datt->municipio}}</td>
<td>{{$datt->ciudad}}</td>
<td>{{$datt->cp}}</td>
<td>{{$datt->referencia}}</td>

<td>
@if($datt->deleted_at=="")
  
   <a href="{{URL::action('curso@modificadat',['idd'=>$datt->idd])}}"> 
   Modificar</a>
	
@endif
</td>
</tr>

</tr>
@endforeach
</table>
@stop
