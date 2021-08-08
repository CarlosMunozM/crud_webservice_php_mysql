<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tabla Dinámica</title>

		<!-- Para el responsive -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<!-- Iconos -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

		<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
		<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
		<link rel="stylesheet" type="text/css" href="librerias/data_table/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="librerias/data_table/css/dataTables.bootstrap5.min.css">
		<link rel="stylesheet" type="text/css" href="librerias/data_table/css/buttons.bootstrap.min.css">


		<script src="librerias/jquery-3.6.0.min.js"></script>
		<script src="librerias/bootstrap/js/bootstrap.js"></script>
		<script src="librerias/alertifyjs/alertify.js"></script>
		<script src="librerias/data_table/js/jquery.dataTables.min.js"></script>
		<script src="librerias/data_table/js/dataTables.bootstrap5.min.js"></script>

		<script src="librerias/data_table/buttons/dataTables.buttons.min.js"></script>
		<script src="librerias/data_table/buttons/jszip.min.js"></script>
		<script src="librerias/data_table/buttons/pdfmake.min.js"></script>
		<script src="librerias/data_table/buttons/vfs_fonts.js"></script>
		<script src="librerias/data_table/buttons/buttons.html5.min.js"></script>
		

		<script src="js/funciones.js"></script>

	</head>
	<body>

		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div id="divRegistrar" class="col-sm-8" style="align-items: center; justify-content: center">
							<center>
							<div class="form-group">
								<h3 class="col-sm-offset-2 col-sm-8 text-center">					
								Registrar Persona</h3>
							</div>
							</center>
							<label>Nombre</label>
					      	<input type="text" name="" id="txtNombreAdd" class="form-control imput-sm">

					      	<label>Apellido</label>
					      	<input type="text" name="" id="txtApellidoAdd" class="form-control imput-sm">

					      	<label>E-mail</label>
					      	<input type="text" name="" id="txtEmailAdd" class="form-control imput-sm">

					      	<label>Teléfono</label>
					      	<input type="text" name="" id="txtTelefonoAdd" class="form-control imput-sm">
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-8">
									<input id="btnGuardar" type="button" class="btn btn-primary" value="Guardar">
									<input id="btnListar" type="button" class="btn btn-secondary" value="Listar">
								</div>
							</div>
						<div class="col-sm-offset-2 col-sm-8">
							<p class="mensaje"></p>
						</div>
					</div>
				</div>
			</div>

		
			<div id="tabla"></div>
			<div id="modales"></div>
		</div>

	</body>
</html>

<script type="text/javascript">		
	$(document).ready(function(){

		$('#tabla').load('componentes/tabla2.php');
		$('#modales').load('componentes/modales.html');

		$('#divRegistrar').hide();

		$('#btnGuardar').click(function() {

			agregarDatos($('#txtNombreAdd').val() , $('#txtApellidoAdd').val(), $('#txtEmailAdd').val(), $('#txtTelefonoAdd').val());
		});

		$('#btnListar').click(function() {
			limpiarRegistrar();

			$('#divRegistrar').slideUp("slow");
		  	$('#tabla').slideDown("slow");
		});

	});

</script>




