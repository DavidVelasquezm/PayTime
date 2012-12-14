<?php
require("class.phpmailer.php");
$vusuario = $_POST['da1'];

if ($vusuario == TRUE){
include('../conex.php');

// Reviso si el email esta en nuestra base de datos...

$cuserid="SELECT * FROM login WHERE Login='".$vusuario."'";
$cont['user']=mysql_query($cuserid, $conn);
$existencia['usuario']=mysql_num_rows($cont['user']);
if($existencia['usuario']==0){
die('No existe una cuenta con ese email registrado en PayTime');
}

// Generamos una password nueva...
	$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
	$cad = "";
	for($i=0;$i<12;$i++) {
	$cad .= substr($str,rand(0,62),1);
	}
// Inserto la password nueva en la base de datos..
$query="UPDATE login SET Password='".$cad."' WHERE Login='".$vusuario."'";
mysql_query($query, $conn);
mysql_close();
// Empiezo a generar el mail de envio.
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
     $mail->Subject    = "Reestablecer Password Paytime";
     $mail->AddAddress("$vusuario");

	// Incluyo html del mailform ();
	include('resetform.php');	
	// Lo adhiero al mail...
	$mail->Body=$mailcontenido;
	// Establezco formato HTML.	
	$mail->isHTML(true);
	// Envio el email.
    $mail->Send();
// Hago el OK de Ajax
echo "ok";
}
?>