<?php
$vla = $_GET['key'];
$vlb = $_GET['id'];

IF( $vla == TRUE && $vlb == TRUE){

$host="localhost";
$usuario="paytime";
$contra="gu5asa8a8";
$db="zadmin_paytime";
$conn=mysql_connect($host,$usuario,$contra);
mysql_select_db("$db",$conn);

$cuserid="SELECT * FROM login WHERE Login='".$vlb."' AND RegKey='".$vla."'";
$cont['user']=mysql_query($cuserid, $conn);
$existencia['usuario']=mysql_num_rows($cont['user']);
if($existencia['usuario']!=0)
{
$query = "UPDATE login SET Activado='1' WHERE Login='".$vlb."' AND RegKey='".$vla."'";
mysql_query($query, $conn);
mysql_close();
die('Cuenta registrada con exito');
}
else {
echo "Error:Los datos introducidos son incorrectos";
die();
}

}

$vusuario = $_POST['da1'];
$vpass = $_POST['da2'];
$vname = $_POST['da3'];

if( $vusuario == FALSE || $vpass == FALSE || $vname == FALSE )
{
//Imprimo E1 que es = Campos Vacios :)
echo '<span class="errrorr">Error: <strong>No puedes Ingresar dejando campos vaciós..</strong></span>';
die();
}

//Si hay campos continuamos...

$host="localhost";
$usuario="paytime";
$contra="gu5asa8a8";
$db="zadmin_paytime";
$conn=mysql_connect($host,$usuario,$contra);
mysql_select_db("$db",$conn);

$cuserid="SELECT * FROM login WHERE Login='".$vusuario."'";
$cont['user']=mysql_query($cuserid, $conn);
$existencia['usuario']=mysql_num_rows($cont['user']);
if($existencia['usuario']!=0)
{
//Usuario No existe..
echo '<span class="errrorr">Error: <strong>El Usuario ya esta registrado!!</strong></span>';
die();
}
// Registramos el usuario...

 // Primero genero un codigo aleatorio para la activacion por email...
	$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
	$cad = "";
	for($i=0;$i<12;$i++) {
	$cad .= substr($str,rand(0,62),1);
	}
 // Ahora inserto los datos en una DB.

$query="INSERT into login (Login,Password,RegKey,Nombre,Activado) VALUES ('".$vusuario."','".$vpass."','".$cad."','".$vname."','0')";
mysql_query($query,$conn);

 // Empiezo a generar el mail...
	$codigohtml = "<html><head><title>Registro Paytime</title></head><body>Gracias por registrarte a Paytime.<br> sigue este link para activar tu cuenta: http://ligool.com/paytime/cores/reg_gen.php?key=$cad&id=$vusuario <br> ";
	$email = $vusuario;
	$asunto = 'Registro Paytime';
	$cabeceras = "From: paytime@ligool.com\r\nContent-type: text/html\r\n";
// Envio el email.
	mail($email,$asunto,$codigohtml,$cabeceras);
// Hago el OK de ajax.
echo "ok";
?>