<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vitalicia | Inicio</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" href="favicon.ico">  
  </head>
  <body>
    
    <div class="top-bar">
      <div class="row">
        <div class="top-bar-left">
	       <a class="navbar-brand" href="{{route('home')}}"><img src="vitalicia.jpg" width="70" height="200" alt="Vitalicia"></a>  
        </div>
          


 
        <div class="top-bar-right">
            <ul class="dropdown menu" data-dropdown-menu>
              <li>
                <a href="{{route('home')}}">Vitalicia</a>
              </li>    
                
              <li>
                <a href="{{route('cmedicamentos')}}">Nuevo Medicamento</a>
              </li>    
                
              <li>
                <a href="{{route('rusu')}}">Datos de Usuarios</a>
              </li>
                
              
              <li>
                <a href="{{route('paci')}}">Pacientes</a>
              </li>
              
              <li>
                <a href="{{route('getpacientes')}}">Familiares</a>
              </li>
                            
                <li>
                    <a href="#">Consultas</a>
                    <ul class="menu">
                        <li><a href="{{route('getdatos')}}">Datos</a></li>
                        <li><a href="{{route('getusuarios')}}">Usuarios</a></li> 
                        <li><a href="{{route('getpacientes')}}">Pacientes</a></li>
                    </ul>   
                </li>
              
              <li>
                <a href="{{route('usu')}}">Iniciar Sesi&oacute;n</a>
              </li>
                
              <li>
                <!--a href="#">Cerrar Sesi&oacute;n</a-->
              </li>
            </ul>
        </div>
      </div>
    </div>
    <br>
  
      
    <hr>

            
    <div class="row large-8" align="center">
          
    </div>
<h3>Modifcar Datos</h3>

@section('form1')
        <form action="{{route('guardamodificadat')}}" method = "POST" enctype="multipart/form-data" >
            {{csrf_field()}}
            Clave 
                <input type="text" name='idd' value="{{$datosm->idd}}" readonly= 'readonly' >
            
            Nombre
            <br>{!! $errors->first('nombre','<span class=error>:message</span>')!!}
                <input type="text" name="nombre" value="{{$datosm->nombre}}">
                
            Apellido Paterno 
            <br>{!! $errors->first('ap','<span class=error>:message</span>')!!}
                <input type="text" name="ap" value="{{$datosm->ap}}">
                
            Apellido Materno
            <br>{!! $errors->first('am','<span class=error>:message</span>')!!}
                <input type="text" name="am" value="{{$datosm->am}}">
                
            Edad 
            <br>{!! $errors->first('edad','<span class=error>:message</span>')!!}
                <input type="text" name="edad" value="{{$datosm->edad}}">

            Tel&eacute;fono
            <br>{!! $errors->first('telefono','<span class=error>:message</span>')!!}
                <input type="text" name="telefono" value="{{$datosm->telefono}}">
@stop
@section('form2')               
            Sexo 
            <br>
                <input type="radio" name="sexo" value="H" checked>Hombre
                <input type="radio" name="sexo" value="M">Mujer
            <br>
            <br>
            Calle 
            <br>{!! $errors->first('calle','<span class=error>:message</span>')!!}
                <input type="text" name="calle" value="{{$datosm->calle}}">
                 
            N&uacute;mero 
            <br>{!! $errors->first('numero','<span class=error>:message</span>')!!}
                <input type="text" name="numero" value="{{$datosm->numero}}">
                
            Entre calle 
            <br>{!! $errors->first('calle1','<span class=error>:message</span>')!!}
                <input type="text" name="calle1" value="{{$datosm->calle1}}">
                
            y calle 
            <br>{!! $errors->first('calle2','<span class=error>:message</span>')!!}
                <input type="text" name="calle2" value="{{$datosm->calle2}}">
                
            Colonia
            <br>{!! $errors->first('colonia','<span class=error>:message</span>')!!}
                <input type="text" name="colonia" value="{{$datosm->colonia}}">
@stop
@section('form3')                
            Municipio
            <br>{!! $errors->first('municipio','<span class=error>:message</span>')!!}
                <input type="text" name="municipio" value="{{$datosm->municipio}}">
                
            Ciudad
            <br>{!! $errors->first('ciudad','<span class=error>:message</span>')!!}
                <input type="text" name="ciudad" value="{{$datosm->ciudad}}">
                
            C&oacute;digo Postal 
            <br>{!! $errors->first('cp','<span class=error>:message</span>')!!}
                <input type="text" name="cp" value="{{$datosm->cp}}">
                
            Referencia 
            <br>{!! $errors->first('referencia','<span class=error>:message</span>')!!}
                <input type="text" name="referencia" value="{{$datosm->referencia}}">

                <img src = "{{asset('archivos/'.$datosm->archivo)}}"  height =100 width=100>
            <br>
            Seleccione foto<input type='file' name ='archivo'>
                
                <input type="submit" class="button" value="Guardar">
        </form>
@stop