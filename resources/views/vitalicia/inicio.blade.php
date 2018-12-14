
<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vitalicia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Centro de Asistencia Gerontológica" />
	<meta name="keywords" content="estancia, adultos mayores, gerontología, cuidado" />
	<meta name="author" content="Victor Díaz" />

	<!-- favicon -->
	<link rel="shortcut icon" href="vitalicia/favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="vitalicia/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="vitalicia/css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="vitalicia/css/simple-line-icons.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="vitalicia/css/owl.carousel.min.css">
	<link rel="stylesheet" href="vitalicia/css/owl.theme.default.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="vitalicia/css/bootstrap.css">

	<link rel="stylesheet" href="vitalicia/css/orange.css">

	<!-- Modernizr JS -->
	<script src="vitalicia/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    </head>
	<body>
	<header role="banner" id="insideV-header">
			<div class="container">
				<!-- <div class="row"> -->
			    <nav class="navbar navbar-default">
		        <div class="navbar-header">
		        	<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-insideV-nav-toggle insideV-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		          	<a class="navbar-brand" href="http://vitalicia.com.mx"><img src="logo.png" alt="Vitalicia"></a>  
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav navbar-right">
		            <li class="active"><a href="#" data-nav-section="inicio"><span>Inicio</span></a></li>
		            <li><a href="#" data-nav-section="nosotros"><span>Nosotros</span></a></li>
		            <li><a href="#" data-nav-section="servicios"><span>Servicios</span></a></li>
		            <li><a href="#" data-nav-section="contacto"><span>Contacto</span></a></li>
                    <li><a href="{{URL::action('vitalicia@galeria')}}" data-nav-section="gallery"><span>Galer&iacute;a</span></a></li>
                    <li><a href="{{URL::action('usuariosc@login')}}"><span>Iniciar Sesión</span></a></li>
		          </ul>
		        </div>
			    </nav>
			  </div>
	</header>

        <div id="inicio"></div>
        <div id="slider" data-section="home">
		<div class="owl-carousel owl-carousel-fullwidth">
			<!-- Background images -->
		    <div class="item" style="background-image:url(vitalicia/images/vitalicia3.jpg)">
		    	<div class="overlay"></div>
                <div class="container" style="position: relative;">
		    		<div class="row">
					    <div class="col-md-7 col-sm-7">
			    			<div class="insideV-owl-text-wrap">
						    	<div class="insideV-owl-text">
		    						<h1 class="insideV-lead to-animate">Vitalicia</h1>
                                    <h2 class="insideV-sub-lead to-animate">Cuidado para la vida</h2>
						    	</div>
						    </div>
					    </div>
		    		</div>
		    	</div>
		    </div>
			<!-- Background images  -->
		    <div class="item" style="background-image:url(vitalicia/images/massage.jpg)">
                <div class="overlay"></div>
		    	<div class="container" style="position: relative;">
		    		<div class="row">
		    			<div class="col-md-7 col-md-push-1 col-md-push-5 col-sm-7 col-sm-push-1 col-sm-push-5">
			    			<div class="insideV-owl-text-wrap">
						    	<div class="insideV-owl-text">
						    		<h1 class="insideV-lead to-animate"> Centro de Asistencia Gerontol&oacute;gica </h1>
									<h2 class="insideV-sub-lead to-animate">- Rehabilitaci&oacute;n f&iacute;sica</h2>
                                    <h2 class="insideV-sub-lead to-animate">- Terapia Ocupacional</h2>
                                    <h2 class="insideV-sub-lead to-animate">- Ludoterapia</h2>
                                    <h2 class="insideV-sub-lead to-animate">- Personal Capacitado</h2>
						    	</div>
						    </div>
					    </div>
		    		</div>
		    	</div>
		    </div>

		    <div class="item" style="background-image:url(vitalicia/images/vitalicia.jpg)">
		    	<div class="overlay"></div>
		    	<div class="container" style="position: relative;">
		    		<div class="row">
		    			<div class="col-md-8 col-md-offset-2 text-center">
		    				<div class="insideV-owl-text-wrap">
						    	<div class="insideV-owl-text">
		    						<h1 class="insideV-lead to-animate">Vitalicia</h1>
									<h2 class="insideV-sub-lead to-animate">Cuidado para la vida</h2>
								</div>
							</div>
		    			</div>
		    		</div>
		    	</div>
		    </div>

		</div>
	</div>
	
        
<!--Nosotros--->
        
        
    <div id="nosotros"></div>
	<div id="insideV-about-us" data-section="nosotros">
		<div class="container">
			<div class="row row-bottom-padded-lg" id="about-us">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Nosotros</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 to-animate">
							<h3>Centro de Asistencia Gerontol&oacute;gica </h3>
						</div>
					</div>
				</div>
				<div class="col-md-8 to-animate">
					<img src="vitalicia/images/vitalicia2.jpg" class="img-responsive img-rounded" alt="Vitalicia">
				</div>
				<div class="col-md-4 to-animate text-justify">
					<h2>Vitalicia</h2>
                    <p>Debido al incremento del n&uacute;mero poblacional de adultos mayores, las necesidades de salud han ido en aumento, existiendo una mayor prevalencia del problema m&aacute;s temido de la vejez: <b>la dependencia funcional.</b></p>
                    <p>Entre las consecuencias que conlleva dicha problem&aacute;tica, destacan: disminuci&oacute;n de la autoestima, cambio de rutina, necesidades de cuidados especiales, desgaste emocional y f&iacute;sico del cuidador, la institucionalizaci&oacute;n, implicaciones econ&oacute;micas,, entre otras.</p>
				</div>
                
			</div>
			<div class="row" id="team">
				<div class="col-md-12 section-heading text-center to-animate">
					<h2>Personal Capacitado</h2>
				</div>
				<div class="col-md-12">
					<div class="row row-bottom-padded-lg">
						<div class="col-md-6 text-center to-animate">
							<div class="person">
								<img src="vitalicia/images/Cax.jpg" class="img-responsive img-rounded" alt="Person">
								<h3 class="name">Lic. Maritza Garc&iacute;a Palomares</h3>
								<!--div class="position">lemun</div-->
								<p>S&iota;guela en Redes Socialess</p>
								<ul class="social social-circle">
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 text-center to-animate">
							<div class="person">
								<img src="vitalicia/images/Victor.jpg" class="img-responsive img-rounded" alt="Person">
								<h3 class="name">Lic. Gabriela Garc&iacute;a Palomares</h3>
								<!--div class="position">Directora.</div-->
								<p>S&iota;guela en Redes Sociales</p>
								<ul class="social social-circle">
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-instagram"></i></a></li>	
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
       
<!--Fin Nosotros--->
        
          
        
        
<!--Servicios--->   
        
         
	<div id="insideV-our-services" data-section="servicios">
		<div class="container">
			<div class="row row-bottom-padded-sm">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Servicios</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 to-animate">
							<h3>Vitalicia</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box to-animate text-justify">
						
						<h3>Nuestros objetivos</h3>
						<ul>
                            <li>Conservar y reforzar la independencia del <b>Adulto Mayor</b></li>
                            <li>Mantener e incrementar la autoestima</li>
                            <li>Mejorar el esstrado y sentido de Salud</li>
                            <li>Estimular las capacidades cognitivas, motoras y funcionales</li>
                            <li>Mejorar la calidad de vida del <b>Adulto Mayor</b> y de su familia</li>
                            <li>Brindar confort y seguridad al <b>Adulto Mayor</b> y de su familia</li>
                        </ul>
					</div>
					<div class="box to-animate ">
						
						<h3>Acupuntura</h3>
						            <ul>
                                        <li>Depresi&oacute;n</li>
                                        <li>Insomnio</li>
                                        <li>Estr&eacute;s</li>
                                        <li>Ansiedad</li>
                                        <li>Colitis</li>
                                        <li>Gastritis</li>
                                        <li>Fibromialgia</li>
                                        <li>Ciatalgia</li>
                                        <li>Dolor Muscular</li>
                                        <li>Artritis</li>
                                        <li>Par&aacute;lisis Facial</li>                                        
                                    </ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box to-animate">
						
						<h3>Consulta Gerontol&oacute;gica</h3>
						<div class="text-justify"><p>Consistiendo en una valoraci&oacute;n personalizada del <b>Adulto Mayor</b> en cuanto a su estado f&iacute;sico, cognitivo, psicol&oacute;gico, social, nutricional, as&iacute; como situaci&oacute;n emocional de su cuidador, con el objetivo de indentificar s&iacute;ndromes  geri&aacute;tricos para su atenci&oacute;n y prevenci&oacute;n</p></div>
					</div>
					<div class="box to-animate">
						
						<h3>Medicina Complementaria</h3>
                              <div class="text-justify"><p>Abordaje terap&eacute;utico del <b>Adulto Mayor</b> a trav&eacute;s de terapias complementarias, como son:</p></div>
                                    <ul>
                                        <li>Acupuntura</li>
                                        <li>Biomagnetismmo</li>
                                        <li>Auriculoterapia</li>
                                        <li>Moxibusti&oacute;n</li>
                                        <li>Cupping</li>
                                    </ul>
                              <div class="text-justify"><p>Esto es con la finalidad de brindar atenci&oacute;n complementando tratamiento farmacol&oacute;gico y as&iacute; proporcionar una mejor calidad de vida.</p></div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box to-animate">
						
						<h3>Rehabilitaci&oacute;n F&iacute;sica</h3>
						      <div class="text-justify"><p>Consiste en un proceso puesto en marcha que pretende mmejorar el nivel funcional para aquellas personas que presentan deficiencias e incapacidad con la finalidad de restablecer la perdida funcional tras un evento que haya modificado las capacidades f&iacute;sicas para un funcionamiento &oacute;ptimo en interaci&oacute;n con el entorno, previniendo y/o diminuyendo el deterioro funcional</p></div>
                    </div>
					<div class="box to-animate">
						
						<h3> Gerontol&oacute;gica</h3>
						      <div class="text-justify"><p>Consistiendo en una valoraci&oacute;n personalizada del <b>Adulto Mayor</b> en cuanto a su estado f&iacute;sico, cognitivo, psicol&oacute;gico, social, nutricional, as&iacute; como situaci&oacute;n emocional de su cuidador, con el objetivo de indentificar s&iacute;ndromes  geri&aacute;tricos para su atenci&oacute;n y prevenci&oacute;n</p></div>
                        
                        
					</div>
				</div>
			</div>
		</div>
	</div>

<!--Fin Servicios--->
        
        
<!--Contacto--->

<div id="insideV-press" data-section="press">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="single-animate animate-press-1">Press Releases</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext single-animate animate-press-2">
							<h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<!-- Press Item -->
					<div class="insideV-press-item to-animate">
						<div class="insideV-press-img" style="background-image: url(vitalicia/images/vitalicia3.jpg)">
						</div>
						<div class="insideV-press-text">
							<h3 class="h2 insideV-press-title">Simplicity <span class="insideV-border"></span></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
							<p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>
						</div>
					</div>
					<!-- Press Item -->
				</div>

				<div class="col-md-6">
					<!-- Press Item -->
					<div class="insideV-press-item to-animate">
						<div class="insideV-press-img" style="background-image: url(vitalicia/images/img_8.jpg)">
						</div>
						<div class="insideV-press-text">
							<h3 class="h2 insideV-press-title">Versatile <span class="insideV-border"></span></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
							<p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>
						</div>
					</div>
					<!-- Press Item -->
				</div>
				
				<div class="col-md-6">
					<!-- Press Item -->
					<div class="insideV-press-item to-animate">
						<div class="insideV-press-img" style="background-image: url(vitalicia/images/vitalicia3.jpg);">
						</div>
						<div class="insideV-press-text">
							<h3 class="h2 insideV-press-title">Aesthetic <span class="insideV-border"></span></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
							<p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>
						</div>
					</div>
					<!-- Press Item -->
				</div>

				<div class="col-md-6">
					<!-- Press Item -->
					<div class="insideV-press-item to-animate">
						<div class="insideV-press-img" style="background-image: url(vitalicia/images/img_10.jpg);">
						</div>
						<div class="insideV-press-text">
							<h3 class="h2 insideV-press-title">Creative <span class="insideV-border"></span></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
							<p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>
						</div>
					</div>
					<!-- Press Item -->
				</div>

			</div>
		</div>
	</div>
        
<!--Contacto--->  
        
        
<!--Contacto--->  
        
      <div id="insideV-contact" data-section="contacto">
          <div class="container">
			<div class="row row-bottom-padded-sm">
				<div class="col-md-12 section-heading text-center">
					<h2>Cont&aacute;ctanos</h2>
					<div class="row">
                   <h3><strong>Oficina</strong></h3>
                <ul class="list-icons">        
                <h3><li>
                    <i class="icon-direction"></i>
                    <strong>Dirección: </strong>Jos&eacute; Vicente Villada Pte. 620, San Francisco, San Mateo Atenco, CP 52104
                </li>
                <li>
                    <i class="icon-phone"></i>
                    <strong>Tel&eacute;fono: </strong>(722) 649 6728
                </li>
                <li>
                    <i class="icon-note"></i>
                    <a href="mailto:info@vitalicia.com.mx"><strong>Escr&iacute;benos</strong></a>
                    </li></h3></ul>
                       <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1026.864827276789!2d-99.53832028494408!3d19.25814157636629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdf4ce3d4fa411%3A0x8fdc2e4c71229c5c!2sJos%C3%A9+Vicente+Villada+Pte.+620%2C+San+Francisco%2C+52104+San+Mateo+Atenco%2C+M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1544402478420" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>          
                        </div>
                        <div class="row">
                            <h3><strong>Escr&iacute;benos tu comentarios</strong></h3>
                        </div>    
                        <div class="row" class="col-md-6">
                            <form action="mail/send.php" method="post">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="sr-only">Nombre</label>
                                        <input placeholder="Nombre" name="name" type="text" required class="form-control input-lg">
                                    </div>	
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="sr-only">E-mail</label>
                                        <input placeholder="E-mail" name="email" type="text" required class="form-control input-lg">
                                    </div>	
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="subject" class="sr-only">Asunto</label>
                                        <input type="text" name="subject" placeholder="¿Cuál es el motivo de su mensaje?" required  class="form-control input-lg">
                                    </div>	
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message" class="sr-only">Mensaje</label>
                                        <textarea placeholder="Su mensaje" name="message" class="form-control input-lg" rows="3" required></textarea>
                                    </div>	
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary " value="Enviar">
                                            <input type="reset" class="btn btn-outline  " value="Borrar">
                                        </div>	
                                    </div>
                                </form>	
                            </div>
                        </div>
                   </div>
              </div>            
          </div>
        </div>

<!--Fin Contacto--->
        
        



<!--Inicio Footer--->
        

	<footer id="footer" role="contentinfo">
		<div class="container">
			<div class="row row-bottom-padded-sm">
				<div class="col-md-12">
					<p class="copyright text-center">Derechos reservados &copy; 2018 | Vitalicia.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="social social-circle">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="https://goo.gl/Bc1qmz"><i class="icon-facebook"></i></a></li>
						<!--li><a href="#"><i class="icon-youtube"></i></a></li-->
					</ul>
				</div>
			</div>
		</div>
	</footer>
	
<!--Fin Footer--->
        
        
	<!-- jQuery -->
	<script src="vitalicia/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="vitalicia/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="vitalicia/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="vitalicia/js/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel -->
	<script src="vitalicia/js/owl.carousel.min.js"></script>


	<!-- Main JS (Do not remove) -->
	<script src="vitalicia/js/main.js"></script>

	</body>
</html>
