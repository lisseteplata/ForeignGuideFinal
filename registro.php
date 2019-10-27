

<?php
 require 'conexion.php';

    $Nombre = $_POST['Nombre'];
	$Email = $_POST['Email'];
    $Contrasena = $_POST['Contrasena'];
    $Apellido_Paterno = $_POST['Apellido_Paterno'];
    $Apellido_Materno = $_POST['Apellido_Materno'];
	$Telefono = $_POST['Telefono'];
                    


if($Nombre!=null && $Email!=null && $Contrasena!=null && $Apellido_Paterno!=null && $Apellido_Materno!=null && $Telefono!=null){
    $insertar = "INSERT INTO Usuario VALUES('$Nombre','$Email','$Contrasena','$Apellido_Paterno','$Apellido_Materno','$Telefono')";
    
    $query= mysqli_query($conectar, $insertar);
}else{
    
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Foreing Guide | Registro</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie-edge">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		<link href="https://fonts.googleapis.com/css?family=Merienda|Prompt|Poppins&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/estilos.css">

		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="css/basic.css">
		<link rel="stylesheet" href="css/residencia.css">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">  
		<link href="https://fonts.googleapis.com/css?family=Anton|Josefin+Sans|Lobster|Nanum+Gothic|Pacifico|Turret+Road|Vibes&display=swap" rel="stylesheet">

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="js/main.js"></script>
	</head>
	<body class="login-background-gradient">

		<header class="flex-align nav-solid">
			<nav class="row flex-align">
					<div class="col-5 logoBox">
						<img src="images/logo.png" alt="Foreing Guide" class="logo-header"> <h5 class="txt-logo"> Foreing Guide</h5>
					</div>
					<div class="col"><a class="nav-item" href="#">Servicios</a></div>
					<div class="col"><a class="nav-item" href="#">Equipo</a></div>
					<div class="col"><a class="nav-item" href="#">Login</a></div>
			</nav>
		</header>

		<!-- =========================== FORMULARIO DE LOGIN =========================== -->
		<div class="content-form-session">
			<div class="form-image form-image-register flex-align-no-bottom">
				<h2>Registro</h2>
			</div>
			<div class="form-body-container">
				<div class="inputs-coontainer">
					<input type="text" name="Nombre" class="form-login input-register" placeholder="Nombre">
					<input type="text" name="Apellido_Paterno" class="form-login dir-left" placeholder="Apellido Paterno">
					<input type="text" name="Apellido_Materno" class="form-login dir-right" placeholder="Apelido Materno">
					<input type="tel" name="Telefono" class="form-login dir-left" placeholder="Telefono">
					<input type="email" name="Email" class="form-login dir-right" placeholder="Email">
					<input type="password" name="Contrasena" class="form-login input-register" placeholder="Password">
					<input type="button" value="Registro" class="form-login btn btn-purple input-register">				
				</div>
			</div>
		</div>

		<!-- ========================================== FOOTER  ========================================== -->

		<footer>
			<div class="footer-back dark-theme">
	
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
	</body>
</html>