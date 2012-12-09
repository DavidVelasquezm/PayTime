<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Todos los experimentos ||| Ligool Labs">
    <meta name="author" content="Cristyan Sepulveda V">
    <title>Ligool Labs</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <!-- Bootstrap -->
  </head>
<BODY BGCOLOR="#FFFFFF" TEXT="#000000" LINK="#FF0000" VLINK="#000080" ALINK="#000080" onLoad="cronometro()">
<?php
$Susuario = $_SESSION['usuario'];
$SHoras = $_SESSION['Horas'];
$SMinutos = $_SESSION['Minutos'];
$SSegundos = $_SESSION['Segundos'];
if ($Susuario == TRUE){
?>
<script language="JavaScript">
    var hora = "0"
    var minuto = "00"
    var segundo = "0"
    
    var horag = <? echo "\"$SHoras\""; ?>
    
    var minutog = <? echo "\"$SMinutos\""; ?>
    
    var segundog = <? echo "\"$SSegundos\""; ?>
    
    function tiempo(){
    
    
    	horag = parseInt(horag) + parseInt(hora)
    	minutog = parseInt(minutog) + parseInt(minuto)
      if (minutog >59){
      minutog = minutog - 60
      horag++
      }
    
      if (segundo !== 0){
        	segundog = parseInt(segundog) + (parseInt(segundo) - parseInt(1) )
      }
      else{
    	segundog = segundog
      }
      if (segundog > 59){
      segundog = segundog - 60
      minutog++
      }
    	console.log(segundog)
    	document.tablatiempo.ttotal.value=horag + ":" + minutog + ":" + segundog
    	document.cronometro.gratisss.value = "0" + ":" + "00" + ":" + "00"
    	hora = "0"
    	minuto = "00"
    	segundo = "0"
    }
    
    
    function cronometro(){
    
      if ((minuto < 10) && (minuto != "00")){
      bajamin = "0" + minuto
      }
      else{
      bajamin = minuto
      }
      bajasec = (segundo < 10) ? segundo = "0" + segundo : segundo
      document.cronometro.gratisss.value = hora + ":" + bajamin + ":" + bajasec
      if (segundo < 59){
      segundo++
      }
      else{
      segundo = "0"
      minuto++
      if (minuto > 59){
      minuto = "00"
      hora++
      }
      }
      window.setTimeout("cronometro()",1000) 
    }
    
</script>

<center></center>
<div class="row-fluid">
    <div class="span6">
      <form name="cronometro">
        <b>Cronometro: </b><input type=text value="" name="gratisss" size=8>
      </form>
      
      <button onclick="tiempo()">
        guardar
      </button>
      <br>
      <h3>tiempo acumulado</h3>
      <form name="tablatiempo">
        <b>Total:</b> <input type=text name="ttotal" size=8 <? echo "value=\"$SHoras:$SMinutos:$SSegundos\""; ?> >
      </form>
      <button class="btn btn-inverse pull-center" type="submit" id="btlof" name="login" value="Logout">
        Log Out
      </button>
      <?php
        }
        else {
        echo "<br><br><br><div class=\"well\" align=\"center\" id=\"login_div\">";
        include('f_log.php');
        echo "</div>";
        }
      ?> 
    </div>
    
    <div class="span6">
      <h3>Agrega el costo por hora</h3>
    </div>

</div>



 


<!-- loaders -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/ajax.js"></script> 

</body>
</html>
