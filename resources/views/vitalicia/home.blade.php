@extends('vitalicia.principal')


@section('complete')      


<ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
  <li class="tabs-title is-active"><a href="#panel1c" aria-selected="true">Datos</a></li>
  <li class="tabs-title"><a href="#panel2c">Usuarios</a></li>
  <li class="tabs-title"><a href="#panel3c">Pacientes</a></li>
  <li class="tabs-title"><a href="#panel4c">Medicamentos</a></li>
</ul>

<div class="tabs-content" data-tabs-content="collapsing-tabs">
    
  <!--Contenido de la Tab 1-->
  <div class="tabs-panel is-active" id="panel1c">
            <div class="table-scroll">
            <table class="hover">
            <tr>
            <th>ID</th><th>Nombre</th>
            <th>Apellido Paterno</th><th>Apellido materno</th><th>Edad</th>
            <th>Telefono</th><th>Calle</th><th>Numero</th><th>Calle1</th>
            <th>Calle2</th><th>Colonia</th><th>Municipio</th><th>Ciudad</th>
            <th>Cp</th><th>Referencia</th><th>Foto</th><th>Operaciones</th>
            @foreach($datosd as $datt)
            </tr>
            <tr><td>{{$datt->idd}}</td>
            <td>{{$datt->nombre}}</td>
            <td>{{$datt->ap}}</td>
            <td>{{$datt->am}}</td>
            <td>{{$datt->edad}}</td>
            <td>{{$datt->telefono}}</td>
            <td>{{$datt->calle}}</td>
            <td>{{$datt->numero}}</td>
            <td>{{$datt->calle1}}</td>
            <td>{{$datt->calle2}}</td>
            <td>{{$datt->colonia}}</td>
            <td>{{$datt->municipio}}</td>
            <td>{{$datt->ciudad}}</td>
            <td>{{$datt->cp}}</td>
            <td>{{$datt->referencia}}</td>

            <td><img src = "{{asset('archivos/'.$datt->archivo)}}" height =100 width=100></td>
            <td>
            @if($datt->deleted_at=="")
            <a href="{{URL::action('vitalicia@eliminam',['idd'=>$datt->idd])}}"> 
            Inhabilitar 
            </a> 
            <a href="{{URL::action('vitalicia@modificadat',['idd'=>$datt->idd])}}">
            Modificar</a></td>
            @else
             <a href="{{URL::action('vitalicia@restauram',['idd'=>$datt->idd])}}"> 
            Restaurar  
            </a> 
            <a href="{{URL::action('vitalicia@efisicam',['idd'=>$datt->idd])}}"> 
            Eliminar 
            </a> 
            @endif
            @endforeach
            </tr>
            </table>
            </div>
  </div>

  <!--Contenido de la Tab 2-->
  <div class="tabs-panel" id="panel2c">
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
             <a href="{{URL::action('vitalicia@modificausua',['idu'=>$usu->idu])}}">
                Modificar</a></td>
            @endforeach
            </tr>
            </table>
  </div>

  <!--Contenido de la Tab 3-->
  <div class="tabs-panel" id="panel3c">
    
  </div>
    
  <!--Contenido de la Tab 4-->
  <div class="tabs-panel" id="panel4c">
    
  </div>
    
    
</div>

   
            
@stop