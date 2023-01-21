<?php 
# Archvios:
#	1) CDN Bootstrap
#	2) Cadena de Conexión de PHP y MySql

require_once 'cdn.html';
	require_once 'db_conexion.php';
?>
 <?php  
 
 session_start();
 #Activar
 if (isset($_POST['amazon'])) 
 {  
   
   $email=$_POST['email'];
   $amazon="Desuscrito";

     $sql = $cnnPDO->prepare(
        'UPDATE user SET amazon=:amazon WHERE email=:email'
     );
     $sql->bindParam(':email',$email);
     $sql->bindParam(':amazon',$amazon);

     $sql->execute();
     header('location:mostrar.php');
 }
 #Activar
    if (isset($_POST['des2'])) 
    {  
      
      $email=$_POST['email'];
      $netflix="Desuscrito";

        $sql = $cnnPDO->prepare(
           'UPDATE user SET netflix=:netflix WHERE email=:email'
        );
        $sql->bindParam(':email',$email);
        $sql->bindParam(':netflix',$netflix);

        $sql->execute();
        header('location:mostrar.php');
    }
 #Activar
 if (isset($_POST['des3'])) 
 {  
   
   $email=$_POST['email'];
   $prime="Desuscrito";

     $sql = $cnnPDO->prepare(
        'UPDATE user SET prime=:prime WHERE email=:email'
     );
     $sql->bindParam(':email',$email);
     $sql->bindParam(':prime',$prime);

     $sql->execute();
     header('location:mostrar.php');
 }
 #Activar
 if (isset($_POST['spotify'])) 
 {  
   
   $email=$_POST['email'];
   $spotify="Desuscrito";

     $sql = $cnnPDO->prepare(
        'UPDATE user SET spotify=:spotify WHERE email=:email'
     );
     $sql->bindParam(':email',$email);
     $sql->bindParam(':spotify',$spotify);

     $sql->execute();
     header('location:mostrar.php');
 }
 #Activar
 if (isset($_POST['des5'])) 
 {  
   
   $email=$_POST['email'];
   $disney="Desuscrito";

     $sql = $cnnPDO->prepare(
        'UPDATE user SET disney=:disney WHERE email=:email'
     );
     $sql->bindParam(':email',$email);
     $sql->bindParam(':disney',$disney);

     $sql->execute();
     header('location:mostrar.php');
 }
 #Activar
 if (isset($_POST['des6'])) 
 {  
   
   $email=$_POST['email'];
   $hbo="Desuscrito";

     $sql = $cnnPDO->prepare(
        'UPDATE user SET hbo=:hbo WHERE email=:email'
     );
     $sql->bindParam(':email',$email);
     $sql->bindParam(':hbo',$hbo);

     $sql->execute();
     header('location:mostrar.php');
 }
?>
<style type="text/css">
      
    
         
          
      
      form{
         
          padding: 40px 0;
          border-radius: 50px;
      }
      body{
                background-image:url(img/scattered-forcefields.png);
                
      }
      .si{
          background-image: radial-gradient(circle at 30.15% 51.74%, #1b1e1a 0, #161616 25%, #0f0a12 50%, #03000d 75%, #000009 100%);
          font-family: 'Roboto';
      
        }
        .sas{
          font-family: 'Roboto';
        }
        
      
       </style>
       <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar suscripciones</title>
    <link rel="icon" href="img/smart-tv.png">
   
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
</head>
       <nav class="navbar navbar-expand-sm bg-dark navbar si">
        <div class="container-fluid">
        <h5 class="text-white"><a class=" navbar-brand logo-image" ><img src="img/logo2.png" alt="alternative"></a></h5>
            
            <div class="collapse navbar-collapse" id="navbarText">
            </div>
            <ul class="nav">
                        <li><a href="welcome1.php">Volver</a></li>
                       
                    </ul>  
        </div>
        </div>
            <ul class="nav">
                        <li><a href="stream.php">Suscribirse a una plataforma</a></li>
                       
                    </ul>  
        </div>
        
       

</div>

    </nav>
<form method="POST">
  <div class="container">   
    <div class="card-deck mt-3">

    <div class="card" style="width: 18rem;">
  <img src="img/netflix.jpg" class="card-img-top" alt="alternative">
  <div class="card-body">
    <h5 class="card-title" name="email">Netflix</h5>
    <input type="text" class="form-control" name="email" value="<?php  echo $_SESSION['email'];?>">
    <?php  echo $_SESSION['netflix'];?>
    <p class="card-text">Es una empresa de entretenimiento y una plataforma de streaming estadounidense. </p>
    <button  class="btn btn-outline-danger" name="des2">Cancelar suscripcion</button>
  </div>
</div>        
<div class="card" style="width: 18rem;">
  <img src="img/music.png" class="card-img-top" alt="alternative">
  <div class="card-body">
    <h5 class="card-title">Amazon</h5>
    <?php  echo $_SESSION['amazon'];?>
    <p class="card-text">

    Amazon Music es una plataforma de retransmisión de música y tienda en línea perteneciente a la empresa Amazon.</p>
<button  class="btn btn-outline-info" name="amazon">Cancelar suscripcion</button>
  </div>
</div>  
<div class="card" style="width: 18rem;">
  <img src="img/spos.png" class="card-img-top" alt="alternative">
  <div class="card-body">
    <h5 class="card-title">Spotify</h5>
    <?php  echo $_SESSION['spotify'];?>
    <p class="card-text">Spotify es una empresa de servicios multimedia sueca fundada en 2006, cuyo producto es la aplicación homónima empleada para la reproducción de música vía streaming.</p>
    <button  class="btn btn-outline-success" name="spotify">Cancelar suscripcion</button>
  </div>
</div>          

    </div>
  </div>  
  <div class="container">   
    <div class="card-deck mt-3">

    <div class="card" style="width: 18rem;">
  <img src="img/HBO.jpeg" class="card-img-top" alt="alternative">
  <div class="card-body">
    <h5 class="card-title">HBO max</h5>
    <?php  echo $_SESSION['hbo'];?>
    <p class="card-text">HBO Max es un servicio de streaming propiedad de Warner Bros. Discovery.  </p>
    <button  class="btn btn-outline-dark" name="des6">Cancelar suscripcion</button>
  </div>
</div>        

<div class="card" style="width: 18rem;">
  <img src="img/disney.jpeg" class="card-img-top" alt="alternative">
  <div class="card-body">
    <h5 class="card-title">Disney Plus</h5>
    <?php  echo $_SESSION['disney'];?>
    <p class="card-text">
Disney+ es un servicio de streaming propiedad de The Walt Disney Company mediante su división Disney Media and Entertainment Distribution.</p>
<button  class="btn btn-outline-info" name="des5">Cancelar suscripcion</button>
  </div>
</div>          
  
    
<div class="card" style="width: 18rem;">
  <img src="img/prime.jpeg" class="card-img-top" alt="alternative">
  <div class="card-body">
    <h5 class="card-title">Prime Video</h5>
    <?php  echo $_SESSION['prime'];?>
    <p class="card-text">
Prime Video es un servicio de streaming OTT de películas y series creado y gestionado por Amazon</p>
<button  class="btn btn-outline-primary" name="des3">Cancelar suscripcion</button>
  </div>
</div>          

    </div>
  </div>  
  </form>
</body>
