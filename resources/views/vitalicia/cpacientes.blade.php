@extends('vitalicia.principal')
@section('encabezado')
<h1>Consulta Pacientes</h1>
@stop
@section('complete')
{{csrf_field()}}


<div class="table-scroll">
<table class="hover">
<tr>
<th>ID</th>
<th>Fecha Pacientes</th>
<th>Datos</th>
<th>Medicamentos</th>
<th>Alimentacion</th>
<th>Signos</th>
<th>Geriatricos</th>
<th>Actividades</th>

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