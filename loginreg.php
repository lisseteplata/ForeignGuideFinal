<?php
 require 'conexion.php';

    $name = $_POST['name'];
	$email = $_POST['email'];
    $password = $_POST['password'];
    $birthdate = $_POST['birthdate'];
    $level = $_POST['level'];
	$institution = $_POST['institution'];
                    


if($name!=null && $email!=null && $password!=null && $birthdate!=null && $level!=null && $institution!=null){
    $insertar = "INSERT INTO usuario VALUES('$name','$email','$password','$birthdate','$level','$institution')";
    
    $query= mysqli_query($conectar, $insertar);
}else{
    
 include 'C:/xampp/htdocs/javascript/registro_null.php';
}

?>


<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>EduMate | Login</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="mosh-preloader"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area clearfix">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <!-- Menu Area Start -->
                <div class="col-12 h-100">
                    <div class="menu_area h-100">
                        <nav class="navbar h-100 navbar-expand-lg align-items-center">
                            <!-- Logo -->
                            <a class="navbar-brand" href="index.php"><img src="img/core-img/logo.png" alt="logo"></a>

                            <!-- Menu Area -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mosh-navbar" aria-controls="mosh-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                            <div class="collapse navbar-collapse justify-content-end" id="mosh-navbar">
                                <ul class="navbar-nav animated" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="index.php">Inicio</a></li>
                                    <li class="nav-item"><a class="nav-link" href="about.html">Información</a></li>
                                </ul>
                                                                
                                <!-- Login/Register btn -->
                                <div class="login-register-btn">
                                    <a href="login.php">Acceder</a>
                                    <a href="register.php">/ Registrarse</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="mosh-breadcumb-area" style="background-image: url(img/core-img/breadcumb.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumbContent">
                        <h2>Bienvenido</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Acceder</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Elements Area Start ***** -->
    <section class="elements-area section_padding_50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="contact-form-area">
                      <form name="form-work" method="post" action="comprueba_login.php">
                        <div class="centrar_login">
                            <label><h2><i class="fa fa-key"></i> Ingresa tus datos</h2></label>

                <!-- ========== Buttons ========== -->

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->									
<!-- ---------------------------------DATOS DE INGRESO--------------------------------- -->					
					<div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Nombre de usuario*">
                    </div>
                
					
                        
					<div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Contraseña*">
                    </div>
                    <!-- Selene Button -->
                        
                    <section class="elements-area section_padding_50">
                        
<!-- ---------------------------------BOTON DE INGRESO--------------------------------- -->		
                       
                        <div class="form-group">
					               <button class="btn mosh-btn" name="enviar" type="submit"> Ingresar</button>
				        </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    
 <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
<?php endif; ?>
                        
                        
                        </div>
                </div>
                </div>
        </div>
    </div>
    </div>
                    <!-- ***** Footer Area End ***** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>
</html> 