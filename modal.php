	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js./bootstrap.min.js"></script>

	<?php

	function mensajes($mensaje, $pagina, $imagen){


		echo "<script>
		$(document).ready(function() {
			$('#miModal').modal('show'); });
			</script>";

			echo "
			<div class='modal' id='miModal' data-backdrop='static' data-keyboard='false'>
			<div class='modal-dialog'>
			<div class='modal-content'>

			<!-- Modal body -->
			<div class='modal-body'>
			<center>
			<img src='img/".$imagen."'width='10%'>
			<p> ". $mensaje ."</p>
			</center>
			</div>

			<!-- Modal footer -->
			<div class='modal-footer'>
			<button type='button' class='btn btn-danger' data-dismiss='modal' onclick='regresarPaginaAnterior()'>Cerrar</button>
			</div>

			</div>
			</div>
			</div>

			<script>
			function regresarPaginaAnterior() {
				window.open('".$pagina."', '_self');
			}
			</script>

			";

		}

		?>