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