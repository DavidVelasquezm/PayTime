﻿<?
@session_start();
$usuario = $_SESSION['usuario'];
if($usuario == FALSE){
die('Debes logear para ver este contenido');
}
include('./conex.php');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dashboard | PayTime">
    <meta name="author" content="Cristyan Sepulveda V">
    <title>Dashboard | Paytime</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/custom.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    
    <!-- Bootstrap -->
</head>
<body>
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
              <li ><a href="./">Inicio</a></li>
              <li class="active"><a href="dashboard.php">Proyectos</a></li>
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
          <h3>Mis proyectos</h3>
          <table class="table table-hover">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Tiempo Acumulado</th>
                  
                </tr>
              </thead>
              <tbody>
<?
$usuar = $_SESSION['usuario'];
$query=mysql_query("SELECT * FROM Tiempos WHERE Usuario='".$usuar."'");
while($avv=mysql_fetch_array($query)){
echo "<tr><td>";
echo $avv['4'];
echo "</td>";
echo "<td>"; 
echo $avv['1'];
echo ":";
echo $avv['2'];
echo ":";
echo $avv['3'];
echo "</td>";
echo "<td><i class=\"icon-pencil\"></i>";
echo "<a href=\"proyectos.php?id=";
echo $avv['5'];
echo "\"> Editar</a></td>";
echo "</tr>";
}
?>
                  
                  <td> </td>
                  <td> </td>
                  <td><i class="icon-plus"></i><a href="proyectos.php?add=1"> aÃ±adir</href></td>
                </tr>
              </tbody>
            </table>

        </div>
        <hr class="visible-phone">
        <div class="span3 offset4">
          <h4>Mi Perfil</h4>
<<<<<<< HEAD:dashboard.html
          <h3> Cristyan Sepulveda <i class="icon-pencil"></i></h3>
=======
          <h3> <? echo $_SESSION['nombre']; ?> <i class="icon-pencil"></i></h3>
>>>>>>> Editar proyectos:dashboard.php
          <img class="img-rounded" src="http://es.gravatar.com/userimage/42947906/69dd99c00ee9ab67d8eae50986cf142c.jpg?size=200">
        </div>  
      </div>
    </div>  


    <!-- loaders -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/ajax.js"></script> 
</body>
</html>
<?
mysql_close();
?>
