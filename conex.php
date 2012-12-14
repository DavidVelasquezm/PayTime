<?

$host="servidor";
$usuario="usuario";
$contra="clave";
$db="database";
$conn=mysql_connect($host,$usuario,$contra);
mysql_select_db("$db",$conn);

?>