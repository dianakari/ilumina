<?php
session_start();
include ('conexion.php');
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

    <title>Ver Usuario</title>
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
            <a href="cierreSesion.php" class="nav-item nav-link text-white"><i class="fas fa-sign-out-alt text-white"></i> Cerrar sesión </a>
        </div>
    </div>
</nav>

  
<?php
include ('conexion.php');
$email = $_REQUEST['email'];
$sql="call consulta ('$email', @res)";
$resultado = $conexion->query($sql);
if ($resultado->num_rows>0){
  $fila= $resultado->fetch_assoc();

?>

<div class="container">
<br><br><br><br>
<div class="row">

<div class="col-md-6">
  <br>
  <br>
  <br>
<?php
echo"<center>";
echo"<img src='img/usuario.png' width='40%'>";
?>

</div>
<div class="col-md-6">
  <center><h2>Información del Administrador </h2></center>
  <br>
  <h3>Datos de Accseso</h3>
  <p>Email: <?php echo $fila['email']; ?> </p>
  <br>
  <hr>
  <h4>Datos Personales: </h4>
  <p>Nombre:  <?php echo $fila['nombre']; ?> </p>
  <p>Apellido Paterno:  <?php echo $fila['aPaterno']; ?></p>
  <p>Apellido Materno:  <?php echo $fila['aMaterno']; ?></p>
  <p>Municipio:  <?php echo $fila['municipio']; ?></p>
  <p>Celular:  <?php echo $fila['celular']; ?></p>

  <?php

}
  ?>

  <p><button class="btn btn-info" onclick="location.href='admonAdmin.php'">Cerrar</button></p>
</div>


</div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>