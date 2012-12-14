<?
@session_start();
$id = $_POST['da1'];
$vusuario = $_SESSION['usuario'];

if($vusuario == FALSE){
die('Debes logear para ver este contenido');
}

include('../conex.php');

$query="INSERT into Tiempos (Usuario,Horas,Min,Secs,Proyecto) VALUES ('".$vusuario."',0,0,0,'".$id."')";
mysql_query($query,$conn);
mysql_close();

?>