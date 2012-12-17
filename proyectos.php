<?
@session_start();
$user = $_SESSION['usuario'];
if($user == FALSE) die('Debes logear para ver este contenido');
$id = $_GET['id'];
$dd = $_GET['add'];
$ed = $_GET['edd'];
if($id == FALSE && $dd == FALSE){
echo "<script type\"text/javascript\">location.href = 'dashboard.php'</script>";
die();
}

if($id == TRUE){
include('./conex.php');

$kk=mysql_query("SELECT * FROM Tiempos WHERE Usuario='".$user."' AND ID='".$id."'");
$existencia = mysql_num_rows($kk);
if($existencia == 0){ 
echo "Este proyecto no te pertenece!";
die("<script type=\"text/javascript\"> document.location.href = 'dashboard.php' </script>");
}
$del = $_GET['del'];



if($del == TRUE && $ed== FALSE){
$query="DELETE FROM Tiempos WHERE Usuario='".$user."' AND ID='".$id."'";
mysql_query($query, $conn);
echo "Se elimino correctamente tu Proyecto";
die("<script type=\"text/javascript\"> document.location.href = 'dashboard.php' </script>");
}

$ok=mysql_query("SELECT * FROM Tiempos WHERE Usuario='".$user."' AND ID='".$id."'");
while($avv=mysql_fetch_array($ok)){
$SHoras = $avv['1'];
$SMinutos = $avv['2'];
$SSegundos = $avv['3'];
$nproyecto = $avv['4'];
	}
}
?>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/custom.css" rel="stylesheet" media="screen">
<script language="JavaScript">
 

    function multiplicar() {
	valor = document.getElementById("costo").value
    
      vhoras = valor*horag
    
      vminutos = (valor*minutog)/60
    
      vsegundos = (valor*segundog)/3200
    
      total = vhoras+vminutos+vsegundos
	ntotal = total.toFixed(2);

      document.valor.total.value=ntotal
    
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
	function godash(){
	document.location.href = 'dashboard.php'
}    

</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37046874-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

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
              <li><a href="./">Inicio</a></li>
              <li  class="active"><a href="dashboard.php">Proyectos</a></li>
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
<?
if($ed == TRUE && $add == FALSE){
$usuar = $_SESSION['usuario'];
$query=mysql_query("SELECT * FROM Tiempos WHERE Usuario='".$usuar."' AND ID='".$id."'");
while($avv=mysql_fetch_array($query)){

$horass = $avv['1'];
$minss = $avv['2'];
$secss = $avv['3'];
}
?>
      <h2 class="form-signin-heading">Editar <? echo $nproyecto; ?></h2>
<div class="form">
      <div class="control-group">
        <div class="controls">
          <input type="text" placeholder="Nombre" class="input-block-level" value="<? echo $nproyecto; ?>" id="nombrepr" name="nombrepr">
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <input type="text" placeholder="Nombre" class="input-block-level" value="<? echo $horass; ?>" id="horap" name="horap">
        </div>
	</div>
      <div class="control-group">
        <div class="controls">
          <input type="text" placeholder="Nombre" class="input-block-level" value="<? echo $minss; ?>" id="minp" name="minp">
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <input type="text" placeholder="Nombre" class="input-block-level" value="<? echo $secss; ?>" id="secp" name="secp">
	<input class="fontsi" type="hidden" value="<? echo $id; ?>" disabled name="idp" id="idp" size=5>
        </div>
      </div>
      </div>
      <div class="control-group">
          <button type="submit" id="editp" name="editp" class="btn btn-large btn-primary">Editar Proyecto</button>
</div>
</div>
<?
}
?>
<?
$add = $_GET['add'];
if($add == TRUE && $ed == FALSE){
?>
      <h2 class="form-signin-heading">Nuevo Proyecto</h2>
      <div class="control-group">
        <div class="controls">
          <input type="text" placeholder="Nombre" class="input-block-level"  id="nombrep" name="nombrep">
        </div>
      </div>
      <div class="control-group">
          <button type="submit" id="crearp" name="crearp" class="btn btn-large btn-primary">Crear Proyecto</button></div>
<?
}
if($add == FALSE && $ed == FALSE){
?>
	<h2> Bienvenido a <? echo $nproyecto; ?> </h2>
      <h3>Tiempo sin Guardar</h3>
      <form name="cronometro">
        <b>Cronometro: </b><input class="fontsi" type=text value="" disabled name="gratisss" size=5>
      </form>
<input class="fontsi" type="hidden" value="" disabled name="rhora" id="rhora" size=5>
<input class="fontsi" type="hidden" value="" disabled name="rmin" id="rmin" size=5>
<input class="fontsi" type="hidden" value="" disabled name="rsec" id="rsec" size=5>
<input class="fontsi" type="hidden" value="<? echo $id; ?>" disabled name="id" id="id" size=5>

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
        <br><b>Total: </b><input class="fontsi" type=text value="" disabled name="total" id="totall" size=5>
      </form>
      <button class="btn" id="total" onClick="multiplicar()">ver valor</button>
    </div>

</div>
</div>
      <button class="btn btn-large btn-primary" id="total" onClick="godash()">Volver a Proyectos</button>
    </div>
<?
}
?>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/ajax.js"></script> 
<?
mysql_close();
?>
