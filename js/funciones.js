

function agregarDatos(nombre, apellido, email, telefono){

	datos =  "nombre="+ nombre +
			 "&apellido="+ apellido +
			 "&email="+ email +
			 "&telefono="+ telefono;
	
	$.ajax({
		type:"POST", //los parámetros NO van en la URL
		url:"http://localhost/crud_webservice_php_mysql/php/Ws/WsCrud.php",
		data: datos,
		success:function(result){
			if(result==1)
			{
				limpiarRegistrar();

				$('#divRegistrar').slideUp("slow");
		  		$('#tabla').slideDown("slow");

				$('#tabla').load('componentes/tabla2.php');
				alertify.success("Agregado con Éxito");
			}
			else{
				alertify.error(result);

			}
		}
	});
};

function modificarDatos(id, nombre, apellido, email, telefono){

	datos =  "id="+ id +
			 "&nombre="+ nombre +
			 "&apellido="+ apellido +
			 "&email="+ email +
			 "&telefono="+ telefono;
	
	$.ajax({
		type:"PUT",
		url:"http://localhost/crud_webservice_php_mysql/php/Ws/WsCrud.php",
		data: datos,
		success:function(result){
			if(result==1)
			{
				$('#tabla').load('componentes/tabla2.php');
				alertify.success("Modificado con Éxito");
			}
			else{
				alertify.error(result);

			}
		}
	});
};

function eliminarDatos(id){

	datos = "id="+ id;
	
	$.ajax({
		type:"DELETE",
		url:"http://localhost/crud_webservice_php_mysql/php/Ws/WsCrud.php",
		data: datos,
		success:function(result){
			if(result==1)
			{
				$('#tabla').load('componentes/tabla2.php');
				alertify.success("Eliminado con Éxito");
			}
			else{
				alertify.error(result);

			}
		}
	});
};

function pasarDatosModificar(id, nombre, apellido, email, telefono){

	$('#txtIdPersonaEdit').val(id);
	$('#txtNombreEdit').val(nombre);
	$('#txtApellidoEdit').val(apellido);
	$('#txtEmailEdit').val(email);
	$('#txtTelefonoEdit').val(telefono);
};

function dialogoEliminar(id){
	alertify.confirm('Eliminar Datos', '¿Está seguro de eliminar este registro?', 
	function(){ 
		eliminarDatos(id);
	}, 
	function(){ /* alertify.error('Cancel')*/});
};

function limpiarRegistrar(){
	$('#txtNombreAdd').val('');
	$('#txtApellidoAdd').val('');
	$('#txtEmailAdd').val('');
	$('#txtTelefonoAdd').val('');
};