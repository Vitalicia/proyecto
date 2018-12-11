@extends('vitalicia.principal')

@section('complete')      
<h2 class="subheader">CONSULTAS <small>Vitalicia</small></h2>
<hr>

<ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
  @if(Session::get('sesiontipo')=="1" or "2")
    <li class="tabs-title is-active"><a href="#datos" aria-selected="true">Datos</a></li>
  @endif
  @if(Session::get('sesiontipo')=="1")
    <li class="tabs-title"><a href="#usuarios">Usuarios</a></li>
  @endif
  <li class="tabs-title"><a href="#pacientes">Pacientes</a></li>
  @if(Session::get('sesiontipo')=="1")
    <li class="tabs-title"><a href="#medicamentos">Medicamentos</a></li>
  @endif
</ul>

<div class="tabs-content" data-tabs-content="collapsing-tabs">
    
  <!--Contenido de la Tab 1-->
  <div class="tabs-panel is-active" id="datos">
        <div class="table-scroll">
            <table class="hover">
            <tr>
                <th>ID</th><th>Nombre</th>
                <th>Apellido Paterno</th><th>Apellido materno</th><th>Edad</th>
                <th>Telefono</th><th>Calle</th><th>Numero</th><th>Calle1</th>
                <th>Calle2</th><th>Colonia</th><th>Municipio</th><th>Ciudad</th>
                <th>Cp</th><th>Referencia</th><th>Foto</th><th>Operaciones</th>
            </tr>
                @foreach($datosd as $datt)
                <tr>
                    <td>{{$datt->idd}}</td>
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
                    @if($datt->deleted_at=="")
                        <td>
                            <a href="{{URL::action('vitalicia@eliminam',['idd'=>$datt->idd])}}"> 
                            <button type="button" class="button small secondary">Inhabilitar</button></a>
                            <a href="{{URL::action('vitalicia@modificadat',['idd'=>$datt->idd])}}"><button type="button" class="button small success">Modificar</button></a>
                        </td>
                    @else
                        <td>
                            <a href="{{URL::action('vitalicia@restauram',['idd'=>$datt->idd])}}"><button type="button" class="button small primary">Restaurar</button></a> 
                            <a href="{{URL::action('vitalicia@efisicam',['idd'=>$datt->idd])}}"><button type="button" class="button small alert">Eliminar</button></a> 
                        </td>
                    @endif
                </tr>
            @endforeach
            </table>
        </div>
  </div>

  <!--Contenido de la Tab 2-->
  <div class="tabs-panel" id="usuarios">
            <table class="hover">
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Tipo</th>
                    <th>Correo</th>
                    <th>Operaciones</th>
                </tr>
                @foreach($usuariosd as $usu)
                    <tr>
                        <td>{{$usu->idu}}</td>
                        <td>{{$usu->usuario}}</td>
                        <td>{{$usu->contrasena='********'}}</td>
                        <td>{{$usu->tip}}</td>
                        <td>{{$usu->correo}}</td>
                        @if($usu->deleted_at=="")
                                <td>
                                    <a href="{{URL::action('vitalicia@modificausua',['idu'=>$usu->idu])}}">
                                        <button type="button" class="button small success">Modificar</button>
                                    </a> 
                                    <a href="{{URL::action('vitalicia@eliminausu',['idu'=>$usu->idu])}}"> 
                                        <button type="button" class="button small secondary">Inhabilitar</button>
                                    </a>
                                </td>
                        @else
                                <td>    
                                    <a href="{{URL::action('vitalicia@restaurusu',['idu'=>$usu->idu])}}"> 
                                        <button type="button" class="button small primary">Restaurar</button> 
                                    </a> 
                                    <a href="{{URL::action('vitalicia@efisicausu',['idu'=>$usu->idu])}}"> 
                                        <button type="button" class="button small alert">Eliminar</button> 
                                    </a> 
                                </td>
                        @endif
                    </tr>           
                @endforeach
            </table>
  </div>

  <!--Contenido de la Tab 3-->
  <div class="tabs-panel" id="pacientes">
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
                </tr>
            @foreach($pacientesd as $patt)
                <tr>
                    <td>{{$patt->idpaciente}}</td>
                    <td>{{$patt->fechapaciente}}</td>
                    <td>{{$patt->nombre}}</td>
                    <td>{{$patt->medicamento}}</td>
                    <td>{{$patt->alimentacion}}</td>
                    <td>{{$patt->signos}}</td>
                    <td>{{$patt->valorg}}</td>
                    <td>{{$patt->act1}}</td>
                </tr>
            @endforeach
        </table>
        </div>
  </div>
    
  <!--Contenido de la Tab 4-->
  <div class="tabs-panel" id="medicamentos">
  <div class="table-scroll">
        <table class="hover">
            <tr>
            <th>ID</th>
            <th>Medicamento</th>
            <th>Indicacion</th>
            <th>Presentación</th>
            </tr>
            @foreach($medicam as $med)
                <tr>
                    <td>{{$med->idamedicamento}}</td>
                    <td>{{$med->nmedica}}</td>
                    <td>{{$med->mindicacion}}</td>
                    <td>{{$med->mpresen}}</td>
                    @if($med->deleted_at=="")
                            <td>
                           <a href="{{URL::action('vitalicia@eliminamedi',['idamedicamento'=>$med->idamedicamento])}}"> 
                               <button type="button" class="button small secondary">Inhabilitar</button> 
                            </a>
                            </td>
                    @else
                            <td>
                             <a href="{{URL::action('vitalicia@restauramedi',['idamedicamento'=>$med->idamedicamento])}}"> 
                                 <button type="button" class="button small primary">Restaurar</button>  
                            </a> 
                            <a href="{{URL::action('vitalicia@efisicamedi',['idamedicamento'=>$med->idamedicamento])}}"> 
                                <button type="button" class="button small alert">Eliminar</button> 
                            </a> 
                            </td>
                    @endif
                </tr>
            @endforeach
        </table>
    </div>
    </div>
</div>
@stop    
    
