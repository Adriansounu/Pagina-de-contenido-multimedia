<?php  
  
    require_once 'db_conexion.php';
  ?>


 <?php  
 
    session_start();
    #Activar
    if (isset($_POST['pagar'])) 
    {  
      
      $email=$_POST['email'];
      $disney="Suscrito";

        $sql = $cnnPDO->prepare(
           'UPDATE user SET disney=:disney WHERE email=:email'
        );
        $sql->bindParam(':email',$email);
        $sql->bindParam(':disney',$disney);

        $sql->execute();
        header('location:stream.php');
    }
  ?>
<?php 
if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
    }
    if (isset($_SESSION['Nombres'])) {
        $nombre = $_SESSION['nombre'];
    }
?>
<?php
if (isset($_POST['Modificar']))
{  
    $email=$_POST['email'];
    $nombre=$_POST['nombre'];
   
    if (!empty($Direccion) && !empty($RFC))
    {  
        $sql = $cnnPDO->prepare(
            'UPDATE user SET email = :email WHERE nombre = :nombre'
        );
        $sql->bindParam(':email',$email);
        $sql->bindParam(':nombre',$nombre);
        $sql->execute();
        unset($sql);
        unset($cnnPDO);
    }
}
?>
<style type="text/css">
      
      .a
{
	width: 680px;
	height: 38;

	top: 70px;
    border-radius: 50px;
    font-size: 16px;
  font-family: 'Helvetica', 'Arial', sans-serif;
  text-align: left;
}
      body{
                background-image:url(img/scattered-forcefields.png);
                
      }
      .si{
    background-image: radial-gradient(circle at 30.15% 51.74%, #1b1e1a 0, #161616 25%, #0f0a12 50%, #03000d 75%, #000009 100%);
}

      
      
        
        
      
       </style>
<center>
<nav class="navbar navbar-expand-sm bg-dark navbar si">
        <div class="container-fluid">
        <a class=" navbar-brand logo-image" ><img src="img/logo2.png" alt="alternative"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="stream.php"><h7><strong> Volver </strong></a></h7>
                </li>
            </ul>
            </div>
        </div>
    </nav>
  <form method="POST">
<div class="card mb-3 a" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/disney.jpeg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Disney</h5>
        <input type="text" class="form-control" name="email" value="<?php  echo $_SESSION['email'];?>">
        <p class="card-text">El pago se reflejara inmediatamente en la cuenta bancaria del usuario</p>
        <p class="fw-bold"><small class="fw-bold">150 $mx</small></p>
<button  class="btn btn-outline-info" name="pagar">Pagar</button>
      </div>
    </div>
  </div>
</div>
</form>
</center>