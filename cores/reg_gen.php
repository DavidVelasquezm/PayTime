<?php
require("class.phpmailer.php");
$vla = $_GET['key'];
$vlb = $_GET['id'];

IF( $vla == TRUE && $vlb == TRUE){

include('../conex.php');

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
echo '<div class="errrorr alert"><strong>Error: </strong>No puedes Ingresar dejando campos vacíos..</div>';
die();
}

//Si hay campos continuamos...

include('../conex.php');

$cuserid="SELECT * FROM login WHERE Login='".$vusuario."'";
$cont['user']=mysql_query($cuserid, $conn);
$existencia['usuario']=mysql_num_rows($cont['user']);
if($existencia['usuario']!=0)
{
//Usuario No existe..
echo '<div class="errrorr alert">Error: <strong>El Usuario ya esta registrado!!</strong></div>';
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

$query="INSERT into Tiempos (Usuario,Horas,Min,Secs) VALUES ('".$vusuario."',0,0,0)";
mysql_query($query,$conn);

// Empiezo a generar el mail...
    $mail= new PHPMailer();
    $mail->IsSMTP();
     $mail->SMTPAuth   = true;
    //$mail->SMTPSecure = "ssl";
     $mail->Host       = "ligool.com";
     $mail->Port       = 25;
    $mail->Username   = 'paytime@ligool.com';
     $mail->Password   = "password";
     //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
     //====== DE QUIEN ES ========
     $mail->From       = "paytime@ligool.com";
     $mail->FromName   = "Paytime Ligool";
     //====== PARA QUIEN =========
     $mail->Subject    = "Registro Paytime";
     $mail->AddAddress("$vusuario");

	// Incluyo html del mailform ();
	include('mailform.php');	
	// Lo adhiero al mail...
	$mail->Body=$mailcontenido;
	// Establezco formato HTML.	
	$mail->isHTML(true);
	// Envio el email.
    $mail->Send();
// Hago el OK de ajax.
mysql_close();
echo "ok";
?>