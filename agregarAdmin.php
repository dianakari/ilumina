<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico">


    <title>Registro de Usuario</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-light bg-info fixed-top">
    <a href="admonAdmin.php" class="navbar-brand text-white">
    <img src="img/ilumina.png" width="30" height="30" class="d-inline-block align-top " alt="">
    I L U M I N A</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" >
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ml-auto">
        <a href="#" class="nav-item nav-link text-white"></a>
        <a href="cierreSesion.php" class="nav-item nav-link text-white"><i class="fas fa-sign-out-alt"></i> Cerrar sesión </a>
        </div>
    </div>
</nav>
<br>
<br>
<br>


    <div class="container">
      <br>
      <h1 class="text-center">AGREGAR ADMINISTRADOR</h1>
      <div class="row">

        <div class="col-md-4"></div>
        <div class="col-md-4">

          
          <form name="registro" action="metodosAdmin.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="opcion" value="1">
             <br>
             <br>
             <br>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Escribe tu email" required="">
            </div>

            <div class="form-group">
              <label for="clave">Contraseña</label>
              <input type="password" class="form-control" id="clave" name="clave" placeholder="Escribe tu contraseña" required minlength="8" maxlength="12">
            </div>

            

            <div class="form-group">
              <label for="nom">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required pattern="[a-zA-ZÑñáéíóúÁÉÍÓÚ ]+">
            </div>

            <div class="form-group">
              <label for="app">Apellido Paterno</label>
              <input type="text" class="form-control" id="aPaterno" name="aPaterno" required pattern="[a-zA-ZÑñáéíóúÁÉÍÓÚ ]+">
            </div>

            <div class="form-group">
              <label for="apm">Apellido Materno</label>
              <input type="text" class="form-control" id="aMaterno" name="aMaterno" required pattern="[a-zA-ZÑñáéíóúÁÉÍÓÚ ]+">
            </div>

              <div class="form-group">
              <label for="apm">Celular</label>
              <input type="text" class="form-control" id="celular" name="celular" >
            </div>

            <div class="form-group">
              <label for="apm">Municipio</label>
              <input type="text" class="form-control" id="municipio" name="municipio" required pattern="[a-zA-ZÑñáéíóúÁÉÍÓÚ ]+">
            </div>


            <center>
            <input class="btn btn-info" type="submit" name="" value="Enviar">
            <button class="btn btn-danger">Cancelar</button>
            </center>
            <br>
            <br>
            <br>

          </form>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js./bootstrap.min.js"></script>
  </body>
</html>