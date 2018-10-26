<form action = "{{route('getusuarios')}}" method = "POST">
        {{csrf_field()}}
        
        
        
        <html>
<body>

<h1>Reporte de usuarios</h1>
<br>
<table border= 1>
<tr><td>ID</td>
<td>Usuario</td>

<td>Contraseña</td>
<td>Turno</td>



@foreach($usuariosd as $usu)


<tr><td>{{$usu->idu}}</td>
<td>{{$usu->usuario}}</td>
<td>{{$usu->contraseña}}</td>
<td>{{$usu->idt}}</td>





</td></tr>
@endforeach
</table>
</body>
</html>

