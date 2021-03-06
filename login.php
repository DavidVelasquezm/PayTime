<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Todos los experimentos ||| Ligool Labs">
    <meta name="author" content="Cristyan Sepulveda V">
    <title>PayTime | Controla tu Tiempo</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 273px;
        padding: 40px 40px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37046874-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    </head>
    <!-- Bootstrap -->
<?
$user = $_SESSION['usuario'];
IF($user == FALSE){
?>
     				<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">PayTime</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="./">inicio</a></li>
              <li><a href="register.php">Registrate</a></li>
              <li><a href="reset.php">Recuperar contraseña</a></li>
              <li><a href="#contact">Contactenos</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<?
}
?>
<?php
$Susuario = $_SESSION['usuario'];
$SHoras = $_SESSION['Horas'];
$SMinutos = $_SESSION['Minutos'];
$SSegundos = $_SESSION['Segundos'];
$activado = $_SESSION['Activado'];
$nombre = $_SESSION['nombre'];
if ($Susuario == TRUE){

if($activado != 'Activado'){
echo "Aun no esta activa tu cuenta, verifica tu email para validarla!";
echo "<a href=\"cores/core_out.php\">Log Out</a>";
die();
}

//echo "<script type=\"text/javascript\">location.href='dashboard.php'</script>";
//die();
?>

<body>
<div id="login_div">
  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">PayTime</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="./">Inicio</a></li>
              <li><a href="dashboard.php">Proyectos</a></li>
              <li><a href="#contact"> Contactenos</a></li>
              <li><button class="btn pull-center" type="submit" id="btloff" name="login" value="Logout">
        Log Out
      </button></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<div class="container">
<div class="row-fluid">
    <div class="span5">
	<h2> Bienvenido <? echo $nombre; ?> </h2>

    
</div>
</div>
</div>
    </div>
      <?php
        }
        else {
        echo "<div  id=\"login_div\">";
	echo "<div id=\"resultado\"></div>";
        include('f_log.php');
        echo "</div>";
}
      ?> 




 


<!-- loaders -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/ajax.js"></script> 

</body>
</html>
