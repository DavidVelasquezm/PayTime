<?
@session_start();
$user = $_SESSION['nombre'];
IF($user == TRUE){
die('<script type="text/javascript">location.href = "dashboard.php"</script>');
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Dashboard | PayTime">
        <meta name="author" content="Cristyan Sepulveda V">
        <title>Dashboard | Paytime</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/custom.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <!-- Bootstrap -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/style_ie.css" />
    <![endif]-->
    <!-- jQuery -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <!-- jmpress plugin -->
    <script type="text/javascript" src="js/jmpress.min.js"></script>
    <!-- jmslideshow plugin : extends the jmpress plugin -->
    <script type="text/javascript" src="js/jquery.jmslideshow.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.48780.js"></script>
        <noscript>
      <style>
      .step {
        width: 100%;
        position: relative;
      }
      .step:not(.active) {
        opacity: 1;
        filter: alpha(opacity=99);
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(opacity=99)";
      }
      .step:not(.active) a.jms-link{
        opacity: 1;
        margin-top: 40px;
      }
      </style>
    </noscript>
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
<body>
  <button class="btn btn-primary btn-large visible-desktop" style=" position: fixed; right: 20px; padding-right: 30px; padding-left: 30px; ">
          Login!
        </button>
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
              <li class="active"><a href="./">Inicio</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="register.php">Registrate</a></li>
              <li><a href="reset.php">Recuperar Contraseña</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
        <div class="container">
         <div id="slidet" style="line-height:25pt;">
      <section id="jms-slideshow" class="jms-slideshow">
        <div class="step" data-color="color-2">
          <div class="jms-content">
            <h3>Nunca mas Desperdicies tu tiempo!</h3>
          <p>El tiempo es oro, y tu un artista, lleva un riguroso control de lo que haces</p>
            <a class="jms-link" href="register.php">registrate!</a>
          </div>
          <img src="images/1.png" />
        </div>
        <div class="step" data-color="color-3" data-y="900" data-rotate-x="80">
          <div class="jms-content">
            <h3>Controla todos tus proyectos</h3>
          <p>enterate de cual te ocupa mas tiempo !</p>
            <a class="jms-link" href="register.php">registrate!</a>
          </div>
          <img src="images/2.png" />
        </div>
        <div class="step" data-color="color-4" data-x="-100" data-z="1500" data-rotate="170">
          <div class="jms-content">
            <h3>Nunca pierdas el control</h3>
          <p>no olvides en que se esfuma tu preciado tiempo</p>
          <a class="jms-link" href="#">Read more</a>
          </div>
          <img src="images/3.png" />
        </div>
        
      </section>
      </div> 
        </div>
    <script type="text/javascript">
      $(function() {
        
        var jmpressOpts = {
          animation   : { transitionDuration : '0.8s' }
        };
        
        $( '#jms-slideshow' ).jmslideshow( $.extend( true, { jmpressOpts : jmpressOpts }, {
          autoplay  : true,
          bgColorSpeed: '0.8s',
          arrows    : false
        }));
        
      });
    </script>
    <div class="container">
      
      </div>
        <div class="row-fluid">
            <div class="span7">
                <div class="hero-unit">
                    <h1>PayTime</h1>
                    <p>Controla tu tiempo, mide con exactitud y desde cualquier dispositivo el tiempo que dedicas a tus proyectos,  calcula el costo por horas con precicion! </p>
                    <p><a class="btn btn-primary btn-large" href="register.php">Empieza a Usarlo!</a></p>
                </div>
            </div>
            <div class="span5">
                <div class="page-header">
                  <h1>Principales caracteristicas<br><small>Disfrutalas Gratis</small></h1>
                </div>
                <ul>
                  <li>Crea multiples proyectos</li>
                  <li>Calcula el gasto por horas</li>
                  <li>Modifica el tiempo actual de cada proyecto</li>
                  <li>utilizalo desde cualquier dispositivo movil</li>
                </ul>
            </div>
        </div>
    </div>

<!-- loaders -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/ajax.js"></script> 
</body>
</html>
