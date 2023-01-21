<?php
session_start();
if(!isset($_SESSION['email'])){

}


include_once("db_conexion.php");
include_once("cdn.html");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="icon" href="img/smart-tv.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/shorthandcss@1.1.1/dist/shorthand.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:200,300,400,500,600,700,800,900&display=swap" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
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
    font-family: 'Roboto';

  }
  .sas{
    font-family: 'Roboto';
  }
  
  

 </style>

<!-- Navigation -->
<nav class="navbar navbar-expand-sm bg-dark navbar si">
        <div class="container-fluid">
        <h5 class="text-white"> Bienvenido a  &nbsp; <a class=" navbar-brand logo-image" ><img src="img/logo2.png" alt="alternative"><?php  echo $_SESSION['nombre'];?></a></h5>
            
            <div class="collapse navbar-collapse" id="navbarText">
        </div>
            <ul class="nav">
                        <li><a href="stream.php">Suscribirse a una plataforma</a></li>
                       
                    </ul>  
        </div>
        </div>
            <ul class="nav">
                        <li><a href="mostrar.php">Mostrar mis suscripciones</a></li>
                       
                    </ul>  
        </div>
        </div>
            <ul class="nav">
                        <li><a href="cerrar.php">Cerrar sesion</a></li>
                       
                    </ul>  
        </div>
</div>

    </nav><br>
    <center><h1 class="text-white sas" >Tu Ultima Serie</h1></center>
    <center><iframe width="600" height="315" src="https://www.youtube.com/embed/CoO3hdfEdt0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>


</body>


</html>