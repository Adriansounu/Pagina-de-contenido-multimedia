<?php
require_once "db_conexion.php";
require_once 'cdn.html';

    if(isset($_POST['enviar'])){

        $correo=$_POST['correo'];
        $comentario=$_POST['comentario'];
        
 
        $sql=$cnnPDO->prepare("INSERT INTO comentarios
        ( correo, comentario) 
        VALUES ( :correo, :comentario)");
        
        $sql->bindParam(':correo', $correo);
        $sql->bindParam(':comentario', $comentario);


        $sql->execute();
        unset($sql);
        unset($cnnPDO);
        }
      
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
        
  <form id="form" method="post">
  <div class="container">
   
        <div class="card">
            <div class="card-body">
                <p> <h4 style="text-align:center;"><strong>Seccion de comentarios</strong>   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
</svg></h4></p>
                <br>
                <form>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Ingresa tu correo electrónico</label>
  <input type="email" class="form-control"  name="correo" id="correo" placeholder="Correo electronico">
</div>
<div class="mb-3">
  <label  class="form-label">Ingresa tu comentario</label>
  <textarea class="form-control" name="comentario" id="comentario" rows="3"></textarea>
</div>
<div class=" d-grid gap-2">
<button type="submit" class="bubbly-button" name="enviar" id="enviar">Registra tu comentario  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg> </button>


</div>
</form>
<section>
                                    <?php
                         require_once 'db_conexion.php';
                         $query = $PDO->prepare('SELECT * FROM comentarios ORDER BY fecha DESC');
                         date_default_timezone_set('America/Mexico_City');
                         $fecha=date("d-m-y H:i:s");
                         $query->execute();
                         $contador=1;
                         while($campo = $query->fetch())
                        {
                        ?>   
  <div class="card text-center">
  <div class="card-header">
  </div>
  <div class="card-body">
    
    <p class="card-text"><strong>Comentario de:</strong> <?php echo $campo["correo"]; ?></p><br>
    <p class="card-text"><strong>Dice:</strong> <?php echo $campo["comentario"]; ?></p><br>
    <p class="card-text"><strong>Fecha de publicacion:</strong> <?php echo $campo["fecha"]; ?></p>
  </div>
  <div class="card-footer text-muted">
  </div>
                        <?php
}
                       ?>
</div>
</div>
                       </section>
		</div>
	</div>
</section>

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
   
    

    $('#enviar').click(function() {
        if ($("#correo").val()  == "" || !formatoemail.test($("#correo").val())){
            Swal.fire({
                icon: 'warning',
                iconColor: 'red',
                title: 'Ingresa tu correo electronico',
                html: '<font color=red><strong>Debes de ingresar tu email!</font>',
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
  title: 'Su comentario se ha registrado correctamente',
  showConfirmButton: false,
  timer: 1000
  
})

        
        }
      
        

        
        
      });
});
</script>


