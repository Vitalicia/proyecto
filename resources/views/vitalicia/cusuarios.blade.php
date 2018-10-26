@extends('vitalicia.principal')
@section('encabezado')
<h1>Consulta Pacientes</h1>
@stop
@section('complete')

<form action = "{{route('getusuarios')}}" method = "POST">
        {{csrf_field()}}
 <div style="overflow-x:auto;">
        

<h1>Reporte de usuarios</h1>
<br>
<div style="overflow-x:auto;">
<table border= 1>
<tr><td>ID</td>
<td>Usuario</td>

<td>Contraseña</td>
<td>Turno</td>
<td>Correo</td>


@foreach($usuariosd as $usu)


<tr><td>{{$usu->idu}}</td>
<td>{{$usu->usuario}}</td>
<td>{{$usu->contrasena}}</td>
<td>{{$usu->idt}}</td>
<td>{{$usu->correo}}</td>





</td></tr>
@endforeach
</table>
</body>
</html>

