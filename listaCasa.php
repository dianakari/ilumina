<?php
include('conexion.php');
?>

  <!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <title>Administración de Usuarios</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-light bg-info fixed-top">
    <a href="#" class="navbar-brand text-white">
    <img src="img/ilumina.png" width="30" height="30" class="d-inline-block align-top  " alt="">
    I L U M I N A</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" >
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ml-auto">
            <a href="listaCasa.php" class="nav-item nav-link text-white"> Lista </a>
             <a href="agregarCasas.php" class="nav-item nav-link text-white"> Agregar </a>
            <a href="index.php" class="nav-item nav-link text-white"><i class="fas fa-sign-out-alt text-white"></i> Cerrar sesión</a>
        </div>
    </div>
</nav>
<br>
<br>
<br>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="bg-info text-center py-5">
        <h1 class="display-4 pt-5 text-white">Lista Casa </h1>
        <br>
        <div class="pb-5 pt-2">
            <p><button class="bg-dark text-white p-2" onclick="location.href='lista.php'">AGREGAR INICIO</button></p>
            <br>
            <p><button class="bg-dark text-white p-2" onclick="location.href=''">AGREGAR FINAL</button></p>
            <BR>
            <p><button class="bg-dark text-white p-2" onclick="location.href=''">ELIMINAR INICIO</button></p>
            <BR>
            <p><button class="bg-dark text-white p-2" onclick="location.href=''">ELIMINAR FINAL</button></p>
        </div>
  </div>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </section>

 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js./bootstrap.min.js"></script>
  </body>
  </html>