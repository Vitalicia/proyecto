<form action = "{{route('getdatos')}}" method = "POST">
        {{csrf_field()}}
        
        
        
        <html>
<body>

<h1>Reporte de datos</h1>
<br>
<table border= 1>
<tr><td>ID</td><td>Nombre</td><td>Ap</td>
<td>Am</td><td>Edad</td></tr>
@foreach($datosd as $datt)
<tr><td>{{$datt->idd}}</td>
<td>{{$datt->nombre}}</td><td>{{$datt->ap}}</td><td>{{$datt->am}}</td><td>{{$datt->edad}}</td>
<td> 
<a href="{{URL::action('vitalicia@getdatos',['idd'=>$datt->idd])}}"> 
Eliminar  
</a>
<a href="{{URL::action('vitalicia@getdatos',['idd'=>$datt->idd])}}"> 
Modificar 
</a>
</td></tr>
@endforeach
</table>
</body>
</html>
