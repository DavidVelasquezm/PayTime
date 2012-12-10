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
  </head>
  <body>
    <div id="login_div" name="login_div">
      <div class="control-group">
        <label class="control-label" for="inputEmail">Nombre</label>
        <div class="controls">
          <input type="text" placeholder="Nombre"  id="nombre" name="nombre">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputEmail">Email</label>
        <div class="controls">
          <input type="text" placeholder="Email"  id="email" name="email">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputPassword">Password</label>
        <div class="controls">
          <input type="password" placeholder="Password"  id="password" name="password">
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <button type="submit" id="regbtn" name="regbtn" class="btn">Register</button>
        </div>
      </div>
    </div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/ajax.js"></script>
  </body>