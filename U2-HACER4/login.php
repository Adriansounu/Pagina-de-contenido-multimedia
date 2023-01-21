<?php 
  session_start();
  

    if (isset($_POST['login'])) {
      require 'db_conexion.php';

      $email=$_POST['email'];
      $psw=$_POST['psw'];
      

      $query=$cnnPDO->prepare('SELECT * from user WHERE email=:email and psw=:psw');

      $query->bindParam(':email',$email);
      $query->bindParam(':psw',$psw);
      

      $query->execute();

      $count=$query->rowCount();
      $campo = $query->fetch();
     
      if ($count) 
      {
     
        $_SESSION['psw'] = $campo['psw'];
        $_SESSION['email'] = $campo['email'];
        $_SESSION['nombre'] = $campo['nombre'];
        $_SESSION['apellido'] = $campo['apellido'];
        $_SESSION['netflix'] = $campo['netflix'];
        $_SESSION['amazon'] = $campo['amazon'];
        $_SESSION['spotify'] = $campo['spotify'];
        $_SESSION['prime'] = $campo['prime'];
        $_SESSION['hbo'] = $campo['hbo'];
        $_SESSION['disney'] = $campo['disney'];
       
      
        echo "<script> window.location.href='welcome1.php';</script>";
          
      }
      else {
        echo "
            <div style='width:40%;margin:0 auto; margin-top:50px;'>
            <div class='card border border-danger  text-center'>
             <div class='card-header'>
                <font color=red>Contraseña incorrecta/Correo incorrecto/Cuenta deshabilitada</font>
              </div>
              <div class='card-body'>
                  <h6 class='card-title'><font color=red><i><strong>Usted no ha ingresado su contraseña o correo correctamente, o su cuenta esta deshabilitada</font></i></strong></h6>
                <br>
                <h6 align=center>
                    <font color=red><i><strong>
                    Verifique sus datos de acceso<br> 
                    </font></i></strong>
                </h6>
                
            </div>
             <div class='card-footer text-muted'>
             <br><a href='login.php'>Volver</a>
              </div>
            </div>
            </div>	";
            
    }
         
    }
    ob_end_flush();
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Favicon  -->
    <link rel="icon" href="img/smart-tv.png">
    <style type="text/css">
       body {
    font-family: 'Roboto';
    background: #4568DC;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #B06AB3, #4568DC);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #B06AB3, #4568DC);
    
    

}


button{
    font-family: 'roboto';
    background: rgb(248, 247, 247);
    border: none;
    display: block;
    width: 80%;
    margin: 10px auto;
    color: #fff;
    height: 40px;
    font-size: 16px;
    cursor: pointer;
    color: rgb(147, 3, 190);
}
form{
   
    padding: 40px 0;
    border-radius: 10px;
}
body{
    background-image:url(img/scattered-forcefields.png);
          background-size: contain;
    -moz-background-size: contain;
    -webkit-background-size: contain;
    -o-background-size: contain;
}



 </style>
    <meta charset="utf-8">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
  </head>
  <body>
    <div class="container">
      <header><strong>Iniciar sesión</strong></header>
      <div class="progress-bar">
        <div class="step">
          <p><strong>Paso 1</strong></p>
          <div class="bullet">
            <span><strong>1</strong></span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p><strong>Paso 2</strong></p>
          <div class="bullet">
            <span><strong> 2</strong></span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      
      </div>
      <div class="form-outer">
        <form method="post">
          <div class="page slide-page">
            <div class="field">
              <div class="label"><strong>Por favor ingresa tu correo electrónico</strong></div>
              <input type="email" name="email" placeholder="Correo electronico"  autofocus >
            </div>
            <div class="field">
              <button class="firstNext next" ><strong>Siguiente</strong></button>
            </div>
          </div>

          <div class="page">
            <div class="title"></div>
            <div class="field">
              <div class="label"><strong>Ingresa tu contraseña.</strong></div>
              <input type="password" name="psw" placeholder="Contraseña">
            </div>
            <div class="field btns">
              <button class="prev-1 prev"><strong>Regresar</strong></button>
              <button  name="login"><strong>Ingresar</strong></button>
              <div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
            </div>
          </div>

         
        </form>
      </div>

</div>
<div class="field btns">
  <form action="index.php">
              <button type="submit" href="index.php"class="prev-1 prev"><strong>Volver <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
</svg></strong></button>
              <div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
            </div>
            </form>
   <!-- Scripts -->
   <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
    <script src="script.js"></script>

  </body>
</html>
