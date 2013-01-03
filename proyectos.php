<?
@session_start();
$user = $_SESSION['usuario'];
if($user == FALSE){
echo "Debes logear para ver este contenido";
sleep(5);
echo "<script type\"text/javascript\">location.href = 'index.php'</script>";
die();
}
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
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Todos los experimentos ||| Ligool Labs">
    <meta name="author" content="Cristyan Sepulveda V">
    <title>PayTime | Controla tu Tiempo</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/custom.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
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

<div class="modal hide fade" id="myModal">
  <div class="modal-header">
    <button type="button" class="close" aria-hidden="true"><a href="dashboard.php">&times;</a></button>
    <h3>Cambios Guardados</h3>
  </div>
  <div class="modal-body">
    <p>Los Cambios fueron guardados con éxito</p>
  </div>
  <div class="modal-footer">
    <a href="dashboard.php" class="btn btn-primary">Volver a Mis Proyectos</a>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="span5">
<div class="page-header">
  <h1 style="text-transform:capitalize;"><? echo $nproyecto; ?> <small>editar</small></h1>
</div>

<div class="form">
      <div class="control-group">
        <div class="controls">
          <input type="text" placeholder="Nombre" class="input-block-level" value="<? echo $nproyecto; ?>" id="nombrepr" name="nombrepr">  <strong>Nombre</strong>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <input type="text" placeholder="Nombre" class="input-block-level" value="<? echo $horass; ?>" id="horap" name="horap">  <strong>Horas</strong>
        </div>
	</div>
      <div class="control-group">
        <div class="controls">
          <input type="text" placeholder="Nombre" class="input-block-level" value="<? echo $minss; ?>" id="minp" name="minp">  <strong>Minutos</strong>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <input type="text" placeholder="Nombre" class="input-block-level" value="<? echo $secss; ?>" id="secp" name="secp"> <strong>Segundos</strong>
	<input class="fontsi" type="hidden" value="<? echo $id; ?>" disabled name="idp" id="idp" size=5>
        </div>
      </div>
      </div>
      <div class="control-group">
          <button type="submit" id="editp" name="editp" class="btn btn-large btn-primary">Editar Proyecto</button>
</div>
</div>
</div>


<?
}
?>
<?
$add = $_GET['add'];
if($add == TRUE && $ed == FALSE){
?>

<div class="modal hide fade" id="myModal">
  <div class="modal-header">
    <button type="button" class="close" aria-hidden="true"><a href="dashboard.php">&times;</a></button>
    <h3>Crear nuevo proyecto</h3>
  </div>
  <div class="modal-body">
    <p>Su nuevo proyecto fue creado con éxito</p>
  </div>
  <div class="modal-footer">
    <a href="dashboard.php" class="btn btn-primary">Volver a Mis Proyectos</a>
  </div>
</div>

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

<div class="modal hide fade" id="myModal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Tiempo Guardado</h3>
  </div>
  <div class="modal-body">
    <p>El tiempo acumulado fue guardado con exito</p>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" data-dismiss="modal">Entendido</button>
  </div>
</div>

<div class="container">
<div class="row-fluid">
<div class="span6">
<div class="page-header">
  <h1 style="text-transform:capitalize">Bienvenido a <? echo $nproyecto; ?><br><small>Tiempo sin Guardar</small></h1>
</div>

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

    <div class="span4 offset2">
      <h3>Agrega el costo por hora</h3>
      <form name="valor">
        <b>Costo por Hora: </b><input class="fontsi" type=text value="10000" id="costo" name="costo" size=5>
        <br><b>Total: </b><input class="fontsi" type=text value="" disabled name="total" id="totall" size=5>
      </form>
      <button class="btn" id="total" onClick="multiplicar()">ver valor</button>
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
include('js/tiempo.php');
?>
</body>
</html> 
<?
mysql_close();
?>
