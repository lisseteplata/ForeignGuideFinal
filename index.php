
<?php
	
if(!isset($p)){
	$p = "principal";
}else{
	$p = $p;
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Foreing Guide | Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie-edge">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		<link href="https://fonts.googleapis.com/css?family=Merienda|Prompt|Poppins&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/estilos.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="css/basic.css">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">  
		<link href="https://fonts.googleapis.com/css?family=Anton|Josefin+Sans|Lobster|Nanum+Gothic|Pacifico|Turret+Road|Vibes&display=swap" rel="stylesheet">

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="js/main.js"></script>
	</head>
	<body>

		<header class="flex-align">
			<nav class="row flex-align">
					<div class="col-5 logoBox">
						<img src="images/logo.png" alt="SDK Logo" class="logo-header"> <h5 class="txt-logo"> Foreing Guide</h5>
					</div>
					<div class="col"><a class="nav-item" href="#">Servicios</a></div>
					<!-- <div class="col"><a class="nav-item" href="#">Tienda</a></div> -->
					<!-- <div class="col"><a class="nav-item" href="#">Videojuegos</a></div> -->
					<div class="col"><a class="nav-item" href="#">Equipo</a></div>
					<div class="col"><a class="nav-item" href="#">Login</a></div>
                    <div class="col"><a class="nav-item" href="registro.php">Sign in</a></div>
			</nav>
		</header>

		<!-- CAROUSEL -->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			  </ol>
			  <div class="carousel-inner">

			    <div class="carousel-item active">
			      <img src="images/banner1.jpg" class="d-block w-100 " alt="...">
			     	<div class="carousel-caption d-none d-md-block">
          				<h5>Fugiat dolore voluptate ex culpa et.</h5>
          				<p>Ad aliqua non in elit occaecat. Veniam est in pariatur duis et anim nulla sit incididunt magna. Dolore aute veniam deserunt minim Lorem aute amet commodo deserunt.</p>
						<p><a href="#" class="btn-white-empty">Más información</a></p>						  
					</div>				
				</div>
	
			    <div class="carousel-item">
			      <img src="images/banner2.jpg" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
          				<h5>Consequat adipisicing sit Lorem in sint.</h5>
          				<p>Officia pariatur mollit minim quis duis pariatur ex non incididunt aute aliquip deserunt velit. Adipisicing est et irure officia cupidatat velit voluptate duis Lorem veniam proident sint. Do deserunt ad officia nisi in commodo ea elit excepteur excepteur incididunt nisi duis. Lorem eu culpa sit velit cupidatat deserunt ipsum quis.</p>
          				<p><a href="#" class="btn-white-empty">Más información</a></p>
        			</div>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
		</div>

		<!-- =================== NOSOTROS ====================== -->
		<div class="container">
			<div class="row box-for-95">
			  <div class="col-sm padding-0">
				<div class="about-menu">
					<a class="btn-about-menu menu-active" onclick="aboutBlock(1)" id="btn-about-1">Acerca de nosotros</a>
					<a class="btn-about-menu" onclick="aboutBlock(2)" id="btn-about-2">Mision</a>
					<a class="btn-about-menu" onclick="aboutBlock(3)" id="btn-about-3">Vision</a>
					<a class="btn-about-menu" onclick="aboutBlock(4)" id="btn-about-4">Objetivo</a>
				</div>
				<div class="about-text" id="text-1">
					<h2>Acerca de nosotros</h2>
					<p>PROGRAMMING SDK, es una empresa focalizada en el diseño y desarrollo de aplicaciones especiales de software, diseño, desarrollo de video juegos, y proyectos integrales. En un mundo altamente tecnificado, signado por cambios vertiginosos producidos por las tecnologías en constante evolución y la demanda de soluciones de alto valor agregado, ya no es suficiente contar solamente con el conocimiento formal de las técnicas de software para el desarrollo de un producto o negocio. PROGRAMMING SDK, aporta a sus clientes calidad de servicio y alto valor agregado, brindando una solución informática adecuada a cada negocio en particular.  Conformamos un equipo de profesionales a los que nos apasiona lo que hacemos, compartiendo un ambiente de desarrollo profesional personal y colectivo, el servicio y el esfuerzo por satisfacer al cliente son parte fundacional de la Empresa.					</p>
				</div>
				<div class="about-text text-disable" id="text-2">
					<h2>
						Nuestra Misión
					</h2>
					<p>
						Ser una empresa que haga de las necesidades sociales y empresariales, soluciones tecnológicas que contribuyan con la evolución de la humanidad a través del desarrollo aplicado a las necesidades específicas de cada empresa o persona ofreciéndoles soluciones integrales con la finalidad de crear o desarrollar software de fácil uso, que tenga sobresalientes niveles de rentabilidad, calidad, presencia e influencia en el mercado laboral.
					</p>
				</div>
				<div class="about-text text-disable" id="text-3">
					<h2>
						Nuestra Visión
					</h2>
					<p>
						Ser una empresa de reconocido prestigio nacional e internacional, con autonomía administrativa, con excelencia en la realización de software, video juegos y soporte, donde se brinde un producto de excelente calidad y en donde el mejoramiento continuo en todas las áreas sean de agrado a nuestros consumidores, de eficiente gestión, competitiva, con alianzas estratégicas en el ámbito nacional e internacional, comprometida con el servicio al cliente, y ser un ejemplo para la sociedad a lo que se refiere en buen servicio.
					</p>
				</div>
				<div class="about-text text-disable" id="text-4">
					<h2>
						Nuestro Objetivo
					</h2>
					<p>
						Desarrollar programas computacionales, con la finalidad y capacidad de resolver situaciones reales a las empresas para su desarrollo, y evolucionamiento tecnológico para atender sus necesidades y hacerlas mejores empresas en su campo laboral, financiero, administrativo y económico, además de actualizarlos en el campo computacional.
					</p>
				</div>
			  </div>
			</div>
		</div>

		<!-- =========================== FORMULARIO DE CONTACTO =========================== -->
		<div class="content-form">
			<div class="content-box-contact">
				<div class="form">
					<h2>Contacto</h2>
					<h3>¿Tiene usted alguna pregunta? Por favor no dude en contactarnos directamente. Nuestro equipo se pondrá en contacto con usted en cuestión de horas para ayudarlo.</h3>
					<div class="box">
						<div class="input-messages">
								<input type="text" id="inputName" placeholder="Nombre">
								<input type="email" id="inputEmail" placeholder="Email">
								<input type="text" id="inputSubject" placeholder="Asunto">
								<textarea name="message" id="inputMessage" cols="30" rows="10" placeholder="Mensaje"></textarea>
								<center><button type="submit button" class="btn btn-success">Enviar</button></center>
						</div>
					</div>
				</div>
				<div class="cardInfo">
					<div>
						<h2>Información De Contacto</h2>
						<h3><i class="fas fa-map-marker-alt"></i></h3>
						<h3>Nueva York</h3>
						<h3><i class="fas fa-mobile-alt"></i></h3>
						<h3>+57 300 8014668</h3>
						<h3><i class="fas fa-envelope"></i></h3>
						<h3>programmingdk@gmail.com</h3>
					</div>
				</div>
			</div>
		</div>
			
		<!-- ========================================== FOOTER  ========================================== -->

		<footer>
			<div class="footer-back dark-theme">
					<div class="container">
						<div class="row flex-align">
							<div class="col-5 flex-align">
									<img src="images/logo.png" alt="Foreing Guide" class="logo-header"> <h5 class="txt-logo-footer"> Foreing Guide</h5>
							</div>
							<div class="col social-footer">
								<h2>Redes sociales</h2>
								<div class="content-social-box">
									<a href="#" class="social-box"><i class="fab fa-facebook"></i></a>
									<a href="#" class="social-box"><i class="fab fa-facebook-messenger"></i></a>								
									<a href="#" class="social-box"><i class="fab fa-twitter"></i></a>
									<a href="#" class="social-box"><i class="fab fa-instagram"></i></a>
									<a href="#" class="social-box"><i class="fab fa-youtube"></i></a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 flex-align copyright-text">
								<p>2019 © Foreing Guide</p>
							</div>
						</div>
					</div>				
			</div>
		</footer>
		
		<!-- ========================================== SCRIPT'S  ========================================== -->

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

		<script type="text/javascript" src="codigo.js"></script>

	</body>
</html>