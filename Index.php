<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico">

    <title>Login</title>
  </head>
  <body>
   <nav class="navbar navbar-expand-md navbar-light bg-info fixed-top">
    <a href="#" class="navbar-brand text-white">
    <img src="img/ilumina.png" width="30" height="30" class="d-inline-block align-top " alt="">
    I L U M I N A</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" >
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ml-auto">
        </div>
    </div>
</nav>
<br>
<br>
<br>
  <div class="container text-center">
  <br>
  <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <img src="img/Ilumina.png" width="70%"  height="95%">
  </div>  
  <div class="col-md-4"></div>
  </div>
  <div class="row">
  <br>
  <div class="col-md-4"></div>
  <br>
  <div class="col-md-4">
  <br>
  <form name="login" action="metodosAdmin.php" method="post">
    <input type="hidden" name="opcion" value="3">

    <div class="form-group row">
    <br>
    <label for="correo" class="col-sm-2 col-form-label">Usuario</label>
    <div class="col-sm-10">
    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>
    </div>

    <div class="form-group row">
    <br>
    <label for="clave" class="col-sm-3 col-form-label">Contraseña</label>
    <div class="col-sm-9">
    <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña" required minlength="8" maxlength="12" pattern="[A-Za-z0-9]+" requireds>
    </div>
    </div>
    <input class="btn-info" type="submit" name="enviar" value="Enviar">

    
  </form>
  <br>

  <?php

require_once 'vendor/autoload.php';
require_once 'config.php';
 
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");


echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";

?>
 
  </div>
  <div class="col-md-4"></div>
  </div>
  </div>

 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>