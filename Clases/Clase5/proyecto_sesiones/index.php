<?php
if(!isset($_SESSION)){
  session_start();
}
require("php/conexion.php");
// QUERY PARA MOSTAR TODOS LOS USUARIOS
//$query_read = "SELECT * FROM usuario";

// print_r($query_read);
//Me imprime la consulta

//$result = mysqli_query($link, $query_read);
// print_r($result);
//Me imprime el objeto que arroja

// $row_usuario = mysqli_fetch_assoc($result);
// print_r($row_usuario);
//El objeto me lo convierte en arreglo asociativo
?> 
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          

          <?php if(!$_SESSION){?>
            <a class="navbar-brand" href="#">Project name</a>
          <?php }else{ ?>
            <a class="navbar-brand" href="logout.php">Log Out</a>
          <?php } ?>
        </div>
        <div class="navbar-collapse collapse">

          <?php if(!$_SESSION){?>
          <form method="POST" action="iniciar_sesion.php" class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="pass" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
          <?php }else{ ?>
            <ul>
              <li>
                <a href="informacion.php">admin panel usuarios</a>
              </li>
            </ul>
          <?php } ?>
        
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, 
        <?php
          if($_SESSION){
            echo $_SESSION['apellido'];
           }else 
            echo 'Mundo';
         ?>

        </h1>
          <?php if($_SESSION){ ?>
            <h5>Tus avatar es: </h5>
            <img src="<?php echo $_SESSION['img']; ?>">
          <?php } ?>

      </div>
    </div>

    <div class="container">
      
    </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>

