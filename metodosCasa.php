<?php
include('conexion.php');
include('modal.php');

$opcion = $_REQUEST['opcion'];

switch ($opcion) {
	case 1:
			$nomDueño = $_REQUEST['nomDueño'];
			$apDueño = $_REQUEST['apDueño'];
			$amDueño = $_REQUEST['amDueño'];
			$municipio = $_REQUEST['municipio'];
			$calle = $_REQUEST['calle'];
			$noCasa = $_REQUEST['noCasa'];
			$noFocos = $_REQUEST['noFocos'];
			$admin_idAdmin = $_REQUEST['admin_idAdmin'];

			$sql = "Call agregarCasa('$nomDueño', '$apDueño', '$amDueño', '$municipio', '$calle', $noCasa, $noFocos, $admin_idAdmin, @res)";
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
			
			$idcasa=$_REQUEST['idcasa'];
			$sql="CALL eliminarCasa ($idcasa, @res)";
			$resultado= $conexion->query($sql);

			if ($resultado)
			{
				mensajes("Casa eliminada", "admonCasa.php", "ok.png");
			}
			else
			{
				mensajes("Error al  eliminar", "admonCasa.php", "error.png");
			}
	case 3:

			
	break;
	default:
		# code...
		break;
}



?>