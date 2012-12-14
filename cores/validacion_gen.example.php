<?


// Este es un ejemplo de la conexion a la DB del servidor, solo debes remplazar los datos de conexion en
//
// 	$host="servidor";
//	$usuario="usuario";
//	$contra="clave";
//	$db="database";

@session_start();
//Validacion General
//******************
//==================================================================
//Limpio variabless
//==================================================================
$vusuario=$_POST['da1'];
$vpass=$_POST['da2'];
if(($vusuario=='')||($vpass==''))
{
//Imprimo E1 que es = Campos Vacios :)
echo '<div class="errrorr alert">Error: <strong>No puedes Ingresar dejando campos vacios..</strong></div>';
die();
}
//Si no hay campos continuamos...

include('../conex.php');

$cuserid="SELECT * FROM login WHERE Login='".$vusuario."'";
$cont['user']=mysql_query($cuserid, $conn);
$existencia['usuario']=mysql_num_rows($cont['user']);
if($existencia['usuario']==0)
{
//Usuario No existe..
echo '<div class="errrorr alert">Error: <strong>El Usuario Ingresado no existe!</strong></div>';
die();
}

$cuserpass="SELECT * FROM login WHERE Login='".$vusuario."' AND Password='".$vpass."'";
$cont['pass']=mysql_query($cuserpass, $conn);
$existencia['pass']=mysql_num_rows($cont['pass']);
if($existencia['pass']==0)
{
//Usuario No existe..
echo '<div class="errrorr alert">Error: <strong>La contraseña ingresada es incorrecta!</strong></div>';
die();
}
$ok=mysql_query("SELECT * FROM Tiempos WHERE Usuario='".$vusuario."'");
while($avv=mysql_fetch_array($ok)){
//Declarando en Sesion los datos que necesitamos....
$_SESSION['usuario']=$vusuario;
$_SESSION['Horas']=$avv['1'];
$_SESSION['Minutos']=$avv['2'];
$_SESSION['Segundos']=$avv['3'];
}
$kk=mysql_query("SELECT * FROM login WHERE Login='".$vusuario."' AND Activado='1'");
$existencia = mysql_num_rows($kk);
if($existencia != 0){ 
$_SESSION['Activado']="Activado";
}
$querykk=mysql_query("SELECT Nombre FROM login WHERE Login='".$vusuario."'");
while($avv2=mysql_fetch_array($querykk)){
$_SESSION['nombre']= $avv2['0'];
}
mysql_close();
echo "ok";
?>