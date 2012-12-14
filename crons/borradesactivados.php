<?
include('../conex.php');
query="SELECT Login FROM login WHERE Activado='0'";
while($avv=mysql_fetch_array($query)){

fquery="SELECT Fecha FROM login WHERE Login='".$avv['0']."'";

$fecha = mysql_query($fquery, $conn);
$segundos=strtotime($fecha) - strtotime('now');
$diferencia_dias=intval($segundos/60/60/24);

IF($diferencia_dias>=3){
$delquery1= "DELETE * FROM login WHERE Login='".$avv['0']."'";
mysql_query($delquery1, $conn);

$delquery2= "DELETE * FROM Tiempos WHERE Usuario='".$avv['0']."'";
mysql_query($delquery2, $conn);
}

}

mysql_close();
?>