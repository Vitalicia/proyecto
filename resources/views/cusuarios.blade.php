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



@foreach($pacientesd as $patt)


<tr><td>{{$patt->idpaciente}}</td>
<td>{{$patt->fechapaciente}}</td>
<td>{{$patt->idd}}</td>
<td>{{$patt->idmedicamento}}</td>
<td>{{$patt->idalimentacion}}</td>
<td>{{$patt->ids}}</td>
<td>{{$patt->idgeriatricos}}</td>
<td>{{$patt->idactividades}}</td>




</td></tr>
@endforeach
</table>
</body>
</html>

