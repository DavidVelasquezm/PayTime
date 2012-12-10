<?php
@session_start();
$horas = $_POST['da1'];
$minutos = $_POST['da2'];
$segundos = $_POST['da3'];
$vusuario = $_SESSION['usuario'];

if($vusuario == TRUE){
$host="localhost";
$usuario="paytime";
$contra="gu5asa8a8";
$db="zadmin_paytime";
$conn=mysql_connect($host,$usuario,$contra);
mysql_select_db("$db",$conn);

$guardar="UPDATE Tiempos SET Horas='".$horas."', Min='".$minutos."', Secs='".$segundos."' WHERE Usuario='".$vusuario."'";
mysql_query($guardar, $conn);
mysql_close();
echo "$horas:$minutos:$segundos";
}
?>