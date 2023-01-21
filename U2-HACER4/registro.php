<?php 
# Archvios:
#	1) CDN Bootstrap
#	2) Cadena de Conexión de PHP y MySql

require_once 'cdn.html';
	require_once 'db_conexion.php';
?>
<?php
# Inicia Código de REGISTRAR

if (isset($_POST['enviar'])) 
{  
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$email=$_POST['email'];
	$psw=$_POST['psw'];
    $confirmar='$psw';
  
	
	if (!empty($nombre && !empty($apellido) && !empty($email)&& !empty($psw)))
{
		$sql=$cnnPDO->prepare("INSERT INTO user
			(nombre,apellido, email, psw) VALUES (:nombre, :apellido, :email, :psw)");
		
		$sql->bindParam(':nombre',$nombre);
		$sql->bindParam(':apellido',$apellido);
		$sql->bindParam(':email',$email);
		$sql->bindParam(':psw',$psw);

		$sql->execute();
		unset($sql);
		unset($cnnPDO);
        echo "<script> window.location.href='index.php';</script>";
	}
}
# Termina Código de REGISTRAR
?>
<!DOCTYPE html>
<html lang="en">
<head>
   

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- JQuery Validate library -->
     <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">
<!-- Favicon  -->
<link rel="icon" href="img/smart-tv.png">
    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Registrarse</title>
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="img/smart-tv.png">
</head>
<style type="text/css">
      
.container
{
	width: 680px;
	height: 38;
	left: 30%;
	top: auto;
    border-radius: 50px;
    font-size: 16px;
  font-family: 'Helvetica', 'Arial', sans-serif;
  text-align: left;
}
button{
    font-family: 'Helvetica', 'Arial', sans-serif;
    background-image: radial-gradient(circle at 50% -20.71%, #8b2cff 0, #631af4 50%, #2307e9 100%);
    border: 2px solid;
    display: block;
    width: 80%;
    margin: 10px auto;
    color: #fff;
    height: 40px;
    font-size: 16px;
    cursor: pointer;
   
    
}
form{
   
    padding: 40px 0;
    border-radius: 50px;
}
body{
          background-image:url(img/scattered-forcefields.png);
          
}
.si{
    background-image: radial-gradient(circle at 30.15% 51.74%, #1b1e1a 0, #161616 25%, #0f0a12 50%, #03000d 75%, #000009 100%);
}


  
  

 </style>
    
<!-- Navigation -->
<nav class="navbar navbar-expand-sm bg-dark navbar si">
        <div class="container-fluid">
        <a class=" navbar-brand logo-image" ><img src="img/logo2.png" alt="alternative"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="index.php"><h7><strong> Volver </strong></a></h7>
                </li>
            </ul>
            </div>
        </div>
    </nav>
                   
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    <!-- Basic -->
    <body>
        
  <form id="form" method="post" >
  <div class="container">
   
        <div class="card">
            <div class="card-body">
                <p> <h4 style="text-align:center;"><strong>Suscribirse</strong>   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
</svg></h4></p>
                <br>
                <form>
                <div class="mb-3">
  <label for="nombre" class="form-label">Ingresa tu nombre</label>
  <input type="text" class="form-control" name="nombre" id="nombre"placeholder="Nombre" autofocus>
</div>
<div class="mb-3">
  <label for="apellido" class="form-label">Ingresa tus apellidos</label>
  <input type="text" class="form-control"  name="apellido" id="apellido" placeholder="Apellidos">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Ingresa tu correo electrónico</label>
  <input type="email" class="form-control"  name="email" id="email" placeholder="Correo electronico">
</div>
<div class="mb-3">
  <label for="psw" class="form-label">Ingresa tu clave de acceso</label>
  <input type="password" class="form-control"  name="psw" id="psw" placeholder="Contraseña">
</div>
<div class="mb-3">
  <label for="confirmar" class="form-label">Ingresa tu clave de nuevo</label>
  <input type="password" class="form-control" name="confirmar" id="confirmar" placeholder="Ingresa nuevamente tu contraseña" >
</div>
<div class=" d-grid gap-2">
<button type="submit" class="bubbly-button" name="enviar" id="enviar">Registrar datos <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg></button>


</div>
</form>

    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
    
</body>
</html>
<script type="text/javascript">
$(document).ready(function() {
    let formatoemail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    let formatonombre = /^[a-zA-Z\s\.\-]+$/;
    let formatosas = /^[a-zA-Z\s\.\-]+$/;
   
    

    $('#enviar').click(function() {
        if ($("#nombre").val()  == "" || !formatonombre.test($("#nombre").val())){
            Swal.fire({
                icon: 'warning',
                iconColor: 'red',
                title: 'Ingresa tu Nombre',
                html: '<font color=red><strong>Datos incorrectos o el campo esta vacio!</font>',
                position: 'top-center',
                showConfirmButton: false,
                confirmButtonText: 'Aceptar',
                timerProgressBar: true,
                timer: 1760
            });
        return false;
        }
        if ($("#apellido").val()  == "" || !formatosas.test($("#apellido").val())){
            Swal.fire({
                icon: 'warning',
                iconColor: 'yellow',
                title: 'Ingresa tus apellidos',
                html: '<font color=yellow><strong>Datos incorrectos o el campo esta vacio!</font>',
                position: 'top-center',
                showConfirmButton: false,
                confirmButtonText: 'Aceptar',
                timerProgressBar: true,
                timer: 1760
            });
        return false;
        }
        else if ($("#email").val() == "" || !formatoemail.test($("#email").val())){
          Swal.fire({
                icon: 'error',
                iconColor: 'red',
                title: 'El formato del correo es invalido',
                html: '<font color=red><strong>Debes ingresar un correo electrónico!</font>',
                position: 'top-center',
                showConfirmButton: false,
                confirmButtonText: 'Aceptar',
                timerProgressBar: true,
                timer: 1760
                
                
            });
        return false;
        }
        else if ($("#psw").val() == "") {
            Swal.fire({
                icon: 'error',
                iconColor: 'red',
                title: 'Debes proporcionar un clave de acceso',
                html: '<font color=red><strong>Debes ingresar un número telefónico!</font>',
                position: 'top-center',
                minlength: 5,
                showConfirmButton: false,
                confirmButtonText: 'Aceptar',
                timerProgressBar: true,
                timer: 1760
            });
        return false;
        }
     else if ($("#confirmar").val() !== $("#psw").val()){
            Swal.fire({
                equalTo: '#psw',
                 icon: 'question',
                 iconColor: 'Cyan',
                title: 'Tu clave de acceso debe ser igual',
                html: '<font color=Cyan><strong>Debes ingresar la clave correctamente!</font>',
                position: 'top-center',
                showConfirmButton: false,
                confirmButtonText: 'Aceptar',
                timerProgressBar: true,
                timer: 1760
                
            });
        return false;
        }
        if ($("#enviar").val() == "") {
            Swal.fire({
  position: 'top-center',
  icon: 'success',
  title: 'Sus datos se han registrado correctamente',
  showConfirmButton: false,
  timer: 1000
  
})

        
        }
      
        

        
        
      });
});
</script>

