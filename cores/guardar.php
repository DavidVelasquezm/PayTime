<?php
@session_start();
$horas = $_POST['da1'];
$minutos = $_POST['da2'];
$segundos = $_POST['da3'];
$vusuario = $_SESSION['usuario'];

if($vusuario == TRUE){
$host="localhost";
$usuario="usuario";
$contra="contraseña";
$db="db";
$conn=mysql_connect($host,$usuario,$contra);
mysql_select_db("$db",$conn);

$guardar="UPDATE Tiempos SET Horas='".$horas."', Min='".$minutos."', Secs='".$segundos."' WHERE Usuario='".$vusuario."'";
mysql_query($guardar, $conn);
mysql_close();

// Seteo nuevamente las variables de Session, que se utilizan al logear / recargar la pagina con respectiva sesion de usuario.
$_SESSION['Horas']=$horas;
$_SESSION['Minutos']=$minutos;
$_SESSION['Segundos']=$segundos;
}
?>