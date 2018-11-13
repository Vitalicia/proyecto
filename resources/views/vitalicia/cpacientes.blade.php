@extends('vitalicia.principal')
@section('encabezado')
<h1>Consulta Pacientes</h1>
@stop
@section('complete')

        {{csrf_field()}}
<div style="overflow-x:auto;">
<table border= 1>
<tr>
<td>ID</td>
<td>Fecha Pacientes</td>
<td>Datos</td>
<td>Medicamentos</td>
<td>Alimentacion</td>
<td>Signos</td>
<td>Geriatricos</td>
<td>Actividades</td>

@foreach($pacientesd as $patt)
</tr>

<tr>
<td>{{$patt->idpaciente}}</td>
<td>{{$patt->fechapaciente}}</td>
<td>{{$patt->idd}}</td>
<td>{{$patt->idmedicamento}}</td>
<td>{{$patt->idalimentacion}}</td>
<td>{{$patt->ids}}</td>
<td>{{$patt->idgeriatricos}}</td>
<td>{{$patt->idactividades}}</td>





@endforeach
</tr>
</table>
</div>
@stop