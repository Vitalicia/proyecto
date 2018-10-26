<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vitalicia | Inicio</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" href="/images/favicon.ico">  
  </head>
  <body>
    
    <div class="top-bar">
      <div class="row">
        <div class="top-bar-left">
	       <a class="navbar-brand" href="{{route('home')}}"><img src="/images/vitalicia.jpg"  alt="Vitalicia"></a>  
        </div>
          


 
        <div class="top-bar-right">
            <ul class="dropdown menu" data-dropdown-menu>
              <li>
                <a href="{{route('home')}}">Inicio</a>
              </li>
                
              <li>
                <a href="#">Acerca de Nosotros</a>
              </li>
                
              <li>
                <a href="#">Galer&iacute;a</a>
              </li>
                
              <li>
                <a href="#">Contacto</a>
              </li>
            
                <li>
                    <a href="#">Vitalicia</a>
                    <ul class="menu">
                      <li><a href="#">Usuarios</a>
                            <ul class="menu">
                                   <li><a href="{{route('rusu')}}">Alta</a></li>
                                    <li><a href="#">Modificaciones</a></li> 
                                    <!--li><a href="">Modificaci&oacute;n</a></li-->
                            </ul>   
                      </li>

                      <li><a href="#">Pacientes</a>
                            <ul class="menu">
                                   <li><a href="#">Registro</a></li>
                                   <li><a href="#">Consulta</a></li>
                            </ul>   
                      </li>

                      <li><a href="#">Consultas</a>
                            <ul class="menu">
                                    <li><a href="{{route('getdatos')}}">Datos</a></li>
                                    <li><a href="{{route('getusuarios')}}">Usuarios</a></li>
                                    <li><a href="{{route('getpacientes')}}">Pacientes</a></li>
                            </ul>   
                      </li>

                    </ul>
                </li>
              
              <li>
                <a href="#">Iniciar Sesi&oacute;n</a>
              </li>
                
              <li>
                <a href="#">Cerrar Sesi&oacute;n</a>
              </li>
            </ul>
        </div>
      </div>
    </div>
    <br>
  
      
    <hr>

            
    <div class="row medium-8 large-4 columns">
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
            </div>
        </div>
    </footer>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
