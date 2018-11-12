@extends('vitalicia.principal')
@section('encabezado')
<h1>Usuarios</h1>
@stop
@section('contenido')
<form action = "{{route('getusuarios')}}" method = "POST">
        {{csrf_field()}}

<br>

<table border= 1>
<tr><td>ID</td>
<td>Usuario</td>

<td>Contraseña</td>
<td>Tipo</td>
<td>Correo</td>


@foreach($usuariosd as $usu)

</tr>
<tr><td>{{$usu->idu}}</td>
<td>{{$usu->usuario}}</td>
<td>{{$usu->contrasena}}</td>
<td>{{$usu->tip}}</td>
<td>{{$usu->correo}}</td>





@endforeach

</tr>
</table>
@stop

