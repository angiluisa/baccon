<!DOCTYPE html>
<html lang="zxx">
	<head>
		<title>BACCON</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/material.min.css" />
		<link rel="stylesheet" href="css/estilos.css" />
		<link rel="shortcut icon" href="img/ico.png"/>
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/material.min.js"></script>
	</head>

	<body>
	
	    	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			  <header class="mdl-layout__header">
			    <div class="mdl-layout__header-row">
			      <!-- Title -->
			      <span class="mdl-layout-title">BACCON</span>
			      <!-- Add spacer, to align navigation to the right -->
			      <div class="mdl-layout-spacer"></div>
			      <!-- Navigation. We hide it in small screens. -->
			      <nav class="mdl-navigation mdl-layout--large-screen-only">
			        <a class="mdl-navigation__link" href="index.html"> <img src="img/ico.png" alt="ico">Inicio</a>
			        <a class="mdl-navigation__link" href="somos.html"><img src="img/ico.png" alt="ico">Quienes somos</a>
			        <a class="mdl-navigation__link" href="servicios.html"><img src="img/ico.png" alt="ico">Servicios</a>
			        <a class="mdl-navigation__link" href="contacto.html"><img src="img/ico.png" alt="ico">Contacto</a>
			      </nav>
			    </div>
			  </header>
			  <div class="mdl-layout__drawer">
			    <span class="mdl-layout-title">BACCON</span>
			    <nav class="mdl-navigation">
			      <a class="mdl-navigation__link" href="index.html"><img src="img/ico.png" alt="ico">Inicio</a>
			      <a class="mdl-navigation__link" href="somos.html"><img src="img/ico.png" alt="ico">Quienes somos</a>
			      <a class="mdl-navigation__link" href="servicios.html"><img src="img/ico.png" alt="ico">Servicios</a>
			      <a class="mdl-navigation__link" href="contacto.html"><img src="img/ico.png" alt="ico">Contacto</a>
			    </nav>
			  </div>
			  <main class="mdl-layout_">
			    <div class="page-content"><!-- Your content goes here --></div>
			   
			  </main>
			</div>

	    <section class="row contenedor1">
				<div id="contact" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="page-title text-center">
					<h1>Contacto</h1>
					<p>Conectate con nosotros y preguntanos lo que quieras estamos, atentos a tus solicitudes einquietudes.  </p>
					<hr class="pg-titl-bdr-btm"></hr>
				</div>
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                
				<div class="form-sec">
                	<form action="" method="post" role="form" class="contactForm">
                    	<div class="col-md-4 form-group">
                            <input type="text" name="name" class="form-control text-field-box" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="email" class="form-control text-field-box" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control text-field-box" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea class="form-control text-field-box" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
            
                            <button class="button-medium" id="contact-submit" type="submit" name="contact">Submit Now</button>
                        </div>
                    </form>
                </div>
			</div>
		</div>
	</div>
	    		</div>
	   
	    </section>

	    <section class="row contenedor2">
	    		
	   
	    </section>

	    <footer class="mdl-mini-footer">
		    <div class="mdl-logo">Términos de Uso | Política de Privacidad |© 2017 baccon.com, LLC Todos los derechos reservados.</div>
			<div class="mdl-mini-footer_left-section"> 
			</div>
		  </footer>
	</body>
</html>