<?php
@session_start();
$nombrep = $_POST['da1'];
$horas = $_POST['da2'];
$minutos = $_POST['da3'];
$segundos = $_POST['da4'];
$id = $_POST['da5'];
$vusuario = $_SESSION['usuario'];
if($vusuario == TRUE){

include('../conex.php');

$guardar="UPDATE Tiempos SET Horas='".$horas."', Min='".$minutos."', Secs='".$segundos."', Proyecto='".$nombrep."' WHERE Usuario='".$vusuario."' AND ID='".$id."'";
mysql_query($guardar, $conn);
mysql_close();

// Seteo nuevamente las variables de Session, que se utilizan al logear / recargar la pagina con respectiva sesion de usuario.
$_SESSION['Horas']=$horas;
$_SESSION['Minutos']=$minutos;
$_SESSION['Segundos']=$segundos;
}
?>