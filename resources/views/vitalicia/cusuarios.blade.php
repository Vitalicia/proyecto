@extends('vitalicia.principal')
@section('encabezado')
<h1>Consulta de usuarios</h1>
@stop


@section('complete')

<table class="hover">
<tr>
<th>ID</th>
<th>Usuario</th>
<th>Contraseña</th>
<th>Tipo</th>
<th>Correo</th>
<th>Operaciones</th>

@foreach($usuariosd as $usu)

</tr>
<tr><td>{{$usu->idu}}</td>
<td>{{$usu->usuario}}</td>
<td>{{$usu->contrasena='********'}}</td>
<td>{{$usu->tip}}</td>
<td>{{$usu->correo}}</td>

 <td>
 ($usu->deleted_at=="")
   <a href="{{URL::action('vitalicia@eliminausu',['idu'=>$usu->idu])}}"> 
	Inhabilitar 
	</a> 
 <a href="{{URL::action('vitalicia@modificausua',['idu'=>$usu->idu])}}">
    Modificar</a></td>
  
	 <a href="{{URL::action('vitalicia@restaurusu',['idu'=>$usu->idu])}}"> 
	Restaurar  
	</a> 
    <a href="{{URL::action('vitalicia@efisicausu',['idu'=>$usu->idu])}}"> 
	Eliminar 
	</a> 

@endforeach

</tr>
</table>

<br><br><br><br><br><br>
@stop
