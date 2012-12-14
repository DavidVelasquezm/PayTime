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
    <link href="bootstrap/css/custom.css" rel="stylesheet" media="screen">
    <!-- Bootstrap -->

<?php
$Susuario = $_SESSION['usuario'];
$SHoras = $_SESSION['Horas'];
$SMinutos = $_SESSION['Minutos'];
$SSegundos = $_SESSION['Segundos'];
$activado = $_SESSION['Activado'];
if ($Susuario == TRUE){

if($activado != 'Activado'){
echo "Aun no esta activa tu cuenta, verifica tu email para validarla!";
echo "<a href=\"cores/core_out.php\">Log Out</a>";
die();
}
?>
<script language="JavaScript">
 
    var valor = 10000

    function multiplicar() {
    
      vhoras = valor*horag
    
      vminutos = (valor*minutog)/60
    
      vsegundos = (valor*segundog)/3200
    
      total = vhoras+vminutos+vsegundos

      document.valor.total.value=total
    
      console.log(total)
    }

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
	document.getElementById('rhora').value = horag
	document.getElementById('rmin').value = minutog
	document.getElementById('rsec').value = segundog
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
</head>
<body onLoad="cronometro()">
<div id="login_div">
  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">PayTime</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#"> Experimentos</a></li>
              <li><a href="#about"> Información</a></li>
              <li><a href="#contact"> Contactenos</a></li>
              <li><button class="btn pull-center" type="submit" id="btloff" name="login" value="Logout">
        Log Out
      </button></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<div class="container">
<div class="row-fluid">
    <div class="span5">
      <h3>Tiempo sin Guardar</h3>
      <form name="cronometro">
        <b>Cronometro: </b><input class="fontsi" type=text value="" disabled name="gratisss" size=5>
      </form>
<input class="fontsi" type="hidden" value="" disabled name="rhora" id="rhora" size=5>
<input class="fontsi" type="hidden" value="" disabled name="rmin" id="rmin" size=5>
<input class="fontsi" type="hidden" value="" disabled name="rsec" id="rsec" size=5>

      <button class="btn" id="save" name="save" onclick="tiempo()">
        Guardar
      </button>
      <br>
      <h3>tiempo acumulado</h3>
      <form name="tablatiempo">
        <b>Total:</b> <input class="fontsi" type=text name="ttotal" disabled size=5 <? echo "value=\"$SHoras:$SMinutos:$SSegundos\""; ?> >
      </form>
      
    </div>
    
    <div class="span6">
      <h3>Agrega el costo por hora</h3>
      <form name="valor">
        <b>Costo por Hora: </b><input class="fontsi" type=text value="10000" id="costo" name="costo" size=5>
        <br><b>Total: </b><input class="fontsi" type=text value="" disabled name="total" size=5>
      </form>
      <button class="btn" onclick="multiplicar()">ver valor</button>
    </div>

</div>
</div>
    </div>
      <?php
        }
        else {
        echo "<br><br><br><div class=\"well\" align=\"center\" id=\"login_div\">";
	echo "<div id=\"resultado\"></div>";
        include('f_log.php');
        echo "</div>";
        }
      ?> 




 


<!-- loaders -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/ajax.js"></script> 

</body>
</html>
