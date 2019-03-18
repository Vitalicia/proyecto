<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
  
    <title>Vitalicia | Inicio</title>
    <!--link rel="stylesheet" href="css/foundation.css"-->
      <link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
    <!--link rel="stylesheet" href="css/foundation.min.css"-->
      <link rel="stylesheet" href="{{ asset('css/foundation.min.css') }}">
    <!--link rel="stylesheet" href="css/app.css"-->
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!--link rel="shortcut icon" href="favicon.ico"-->  
      <link rel="stylesheet" href="{{ asset('favicon.ico') }}">

      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  
  
  </head>
  <body>
    
    <div class="top-bar">
      <div class="row">
        <div class="top-bar-left">
	       <a class="navbar-brand" href="{{route('home')}}"><img src="vitalicia.jpg" width="70" height="200" alt="Vitalicia"></a> 
        </div>
          


 
        <div class="top-bar-right">
            <ul class="dropdown menu" data-dropdown-menu>
              <li>@if (Session::has('sesionname'))
                  <div><h5 class="subheader">¡Hola {{ Session::get('sesionname')}}!</h5></div>
                  @endif
              </li>
                
              <li>
                <a href="{{route('home')}}">Consultas</a>
              </li>    
                
              @if(Session::get('sesiontipo')=="1")
              <li>
                <a href="{{route('cmedicamentos')}}">Nuevo Medicamento</a>
              </li>    
              @endif 
              
              <li>
                <a href="{{route('rusu')}}">Datos Generales</a>
              </li>
                
              @if(Session::get('sesiontipo')=="1" or "2")
              <li>
                        <a href="{{route('regpacientes')}}">Pacientes</a>
              </li>
              @endif
                
              @if(Session::get('sesiontipo')=="1")
              <li>
                <a href="{{route('usu')}}">Nuevo Usuario</a>
              </li>
              @endif

              @if(Session::get('sesiontipo')=="1")
              <li>
                <a href="{{route('certi')}}">Certificados</a>
              </li>
              @endif
                
              <li>
                <a href="{{URL::action('usuariosc@cerrarsesion')}}">Cerrar Sesi&oacute;n</a>
              </li>
            </ul>
        </div>
      </div>
    </div>
    <br>
     <div align="center">
     @yield('micabeza')
     </div>
      
    <hr>

            
    <div class="row large-10" align="center">
            @yield('encabezado')
    </div>
        
        
    <div class="row medium-8 large-5 columns">
            @yield('contenido')
    </div>
      
    <div class="row medium-8 large-3 columns">
            @yield('contenido2')
    </div>
    
    <div class="row">
            <div class="medium-4 columns">
            @yield('form1')
            </div>
            <div class="medium-4 columns">
            @yield('form2')
            </div>
            <div class="medium-4 columns">
            @yield('form3')
            </div>
</div>

<div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-5"></div>
      <div class="col-sm-3 col-md-2">@yield('form4')</div>
      <div class="col-sm-3 col-md-2">@yield('form5')</div>
      <div class="col-sm-3 col-md-3 "></div>
      <div class="col-sm-3 col-md-5 "></div>
      <div class="col-sm-3 col-md-3 ">@yield('form6')</div>
      <div class="col-sm-3 col-md-5 "></div>
      <div class="col-sm-3 col-md-3 ">@yield('form7')</div>
      <div class="col-sm-3 col-md-5 "></div>
      <div class="col-sm-3 col-md-3 ">@yield('form8')</div>
      <div class="col-sm-3 col-md-5 "></div>
      <div class="col-sm-3 col-md-2 ">@yield('form9')</div>
      <div class="col-sm-3 col-md-2 ">@yield('form10')</div>
      <div class="col-sm-3 col-md-6 "></div>
      <div class="col-sm-3 col-md-2 ">@yield('form11')</div>
      <div class="col-sm-3 col-md-5 "></div>
      <div class="col-sm-3 col-md-3 ">@yield('form12')</div>
      <div class="col-sm-3 col-md-5 "></div>
      <div class="col-sm-3 col-md-4 ">@yield('form13')</div>
      <div class="col-sm-3 col-md-5 "></div>
      <div class="col-sm-3 col-md-4 ">@yield('form14')</div>
      
    </div>  
  </div>
</div>


    
    <div class="row">
            <div class="large-4 columns">
            @yield('box1')
            </div>
            <div class="large-8 columns">
            @yield('box2')
            </div>
    </div>
    
    <div class="row">
        <div class="medium-8 large-5 columns">
        @yield('espacio')
        </div> 
    </div> 
    
    <div class="row">
        <div class="large-12 large-!2 columns">
        @yield('complete')
        </div> 
    </div>
      
    <hr>
      
    <footer>
        <div class="row">
            <div class="small-12 medium-6 columns">
                <p>Copyright &reg; {{date('Y')}} | Vitalicia</p>
                @yield('pie')
            </div>
        </div>
    </footer>

    <!--script src="js/vendor/jquery.js"></script-->
    <script src="{{ asset('js/vendor/jquery.js') }}"></script>
    <!--script src="js/vendor/what-input.js"></script-->
    <script src="{{ asset('js/vendor/what-input.js') }}"></script>
    <!--script src="js/vendor/foundation.js"></script-->
    <script src="{{ asset('js/vendor/foundation.js') }}"></script>
    <!--script src="js/app.js"></script-->
    <script src="{{ asset('js/app.js') }}"></script>
      
      </body>
</html>
