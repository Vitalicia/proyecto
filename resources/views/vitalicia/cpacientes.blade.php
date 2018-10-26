<form action = "{{route('getpacientes')}}" method = "POST">
        {{csrf_field()}}
        
        
        
        <html>
<body>

<h1>Reporte de Pacientes</h1>
<br>
<table border= 1>
<tr><td>ID</td>
<td>Fecha Pacientes</td>

<td>Datos</td>
<td>Medicamentos</td>
<td>Alimentacion</td>
<td>Signos</td>
<td>Geriatricos</td>
<td>Actividades</td>


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

