<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #9661A5;
  color: white;
}
</style>
</head>
<body>

<table id="customers">

  <tr>


 <th>IDU</th>   <th>Edad</th>     <th>Sexo</th>     <th>Talla</th>    <th>Peso</th> 


</tr>



<tr>

<td>{{$usuarios->idu}}</td>
<td>{{$usuarios->edad}}</td>
<td>{{$usuarios->sexo}}</td>
<td>{{$dapacientes->talla}}</td>
<td>{{$dapacientes->peso}}</td>


</tr>

</table>

<br>

<table id="customers">

<tr>

<th>T:A:</th>   <th>F:C</th>     <th>F:R</th>    

</tr>

<tr>

<td>{{$dapacientes->ta}}</td>
<td>{{$dapacientes->fc}}</td>
<td>{{$dapacientes->fr}}</td>

</tr>

</table>




  
</table>

</body>
</html>

