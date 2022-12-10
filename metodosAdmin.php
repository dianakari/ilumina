<?php
include('conexion.php');
include('modal.php');

$opcion = $_REQUEST['opcion'];

switch ($opcion) {
	case 1:
			$email = $_REQUEST['email'];
			$clave = $_REQUEST['clave'];
			$nombre = $_REQUEST['nombre'];
			$aPaterno = $_REQUEST['aPaterno'];
			$aMaterno = $_REQUEST['aMaterno'];
			$celular = $_REQUEST['celular'];
			$municipio = $_REQUEST['municipio'];

			$sql = "call agregarAdmin('$email','$clave','$nombre','$aPaterno','$aMaterno','$celular','$municipio',@res)";
			$resultado= $conexion->query($sql);

			if ($resultado)
			{
				mensajes("Usuario registrado", "index.php", "ok.png");
			}
			else
			{
				mensajes("Error al  registrar", "index.php", "error.png");
			}
		break;

	case 2:

			
			$email=$_REQUEST['email'];
			$sql="CALL eliminarAdmin ('$email', @res)";
			$resultado= $conexion->query($sql);

			if ($resultado)
			{
				mensajes("Usuario eliminado", "index.php", "ok.png");
			}
			else
			{
				mensajes("Error al  eliminar", "index.php", "error.png");
			}
		break;



	case 3:
			session_start();
			$email = $_REQUEST['email'];
			$clave =$_REQUEST['clave'];
			$sql="CALL consulta2('$email','$clave', @res)";
			$resultado=$conexion->query($sql);
			if($fila=mysqli_fetch_array($resultado)){
				$_SESSION['admin']=array('admin'=>$fila[2]);
				header('Location:menuPrin.php');
				}
			
			else{
				mensajes('Error en la contraseña', 'index.php', "error.png");
			}
	break;

	default:
	break;




}


?>