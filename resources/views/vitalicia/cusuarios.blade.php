@extends('vitalicia.principal')
@section('encabezado')
<h1>Usuarios</h1>
@stop
@section('complete')
<form action = "{{route('getusuarios')}}" method = "POST">
        {{csrf_field()}}
 <div style="overflow-x:auto;">
        


<br>
<div style="overflow-x:auto;">
<table border= 1>
<tr><td>ID</td>
<td>Usuario</td>

<td>Contraseña</td>
<td>Tipo</td>
<td>Correo</td>


@foreach($usuariosd as $usu)


<tr><td>{{$usu->idu}}</td>
<td>{{$usu->usuario}}</td>
<td>{{$usu->contrasena}}</td>
<td>{{$usu->tipo}}</td>
<td>{{$usu->correo}}</td>





</tr>
@endforeach
</table>
@stop

