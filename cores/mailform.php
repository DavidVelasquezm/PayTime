<?
$mailcontenido = "<!DOCTYPE html>
<html lang=\"es\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Todos los experimentos ||| Ligool Labs\">
    <meta name=\"author\" content=\"Cristyan Sepulveda V\">
    <title>Ligool Labs</title>
    <!-- Bootstrap -->
    <link href=\"bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\">
    <!-- Bootstrap -->

    <style type=\"text/css\">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
    </style>
    <link href=\"bootstrap/css/bootstrap-responsive.min.css\" rel=\"stylesheet\" media=\"screen\">
  </head>
  <body>

    <div id=\"login_div\" name=\"login_div\">
      <div class=\"container\">
    <div class=\"form-signin\"> 
      <h2 align=\"center\" class=\"form-signin-heading\">Gracias por Registrarte en PayTime </h2>
      <div class=\"control-group\">
	  <div class=\"controls\">
      <p><strong>$vname</strong>, Gracias por registrarte en PayTime, esperamos que nuestra herramienta te ayude a 
      contabilizar tu tiempo, para empezar a utilizarla, solo debes validar tu email.
	  	<p>Tu codigo de Activacion Es: <strong>$cad</strong></p>
      </div>
      </div>
      <div class=\"control-group\">
        <div class=\"controls\">
          <p align=\"left\"><a href=\"http://ligool.com/paytime/cores/reg_gen.php?key=$cad&id=$vusuario\">Activar Cuenta</a>
        </p> 
        </div>
      </div>
      </div>
      </div>
    </div>
    <script src=\"http://code.jquery.com/jquery-latest.js\"></script>
    <script src=\"bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"js/ajax.js\"></script>
  </body>";

?>