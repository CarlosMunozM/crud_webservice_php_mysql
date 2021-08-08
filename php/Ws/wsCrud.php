<?php
	require_once("../DAO/PersonaDAO.php");
	require_once("../Modelo/Persona.php");
	
	//Listar registros
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		
		$personaDAO = new PersonaDAO();
		header("HTTP/1.1 200 hay datos");
		echo $personaDAO->mostrarPersonas();
		exit;		
	}
	
	//Insertar registro
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$personaDAO = new PersonaDAO();
		$persona = new Persona();

		parse_str(file_get_contents("php://input"),$post_vars);
		
		$persona -> setNombre($post_vars['nombre']);
		$persona -> setApellido($post_vars['apellido']);
		$persona -> setEmail($post_vars['email']);
		$persona -> setTelefono($post_vars['telefono']);

		$resultado = $personaDAO -> agregarPersona($persona);
		if($resultado == 1)
		{
			header("HTTP/1.1 200 Ok");
			echo $resultado;
		}
		else if($resultado == 0)
			echo "Error al agregar";
		
		exit;
		
	}
	
	//Actualizar registro
	if($_SERVER['REQUEST_METHOD'] == 'PUT')
	{		
		$personaDAO = new PersonaDAO();
		$persona = new Persona();

		parse_str(file_get_contents("php://input"),$post_vars);
		
		$persona -> setIdPersona($post_vars['id']);
		$persona -> setNombre($post_vars['nombre']);
		$persona -> setApellido($post_vars['apellido']);
		$persona -> setEmail($post_vars['email']);
		$persona -> setTelefono($post_vars['telefono']);

		$resultado = $personaDAO -> actualizarPersona($persona);

		if($resultado == 1)
		{
			echo $resultado;
			header("HTTP/1.1 200 Ok");
		}
		else if($resultado == 0)
			echo "Error al actualizar";
		
		exit;
	}
	
	//Eliminar registro
	if($_SERVER['REQUEST_METHOD'] == 'DELETE')
	{
		$personaDAO = new PersonaDAO();
		$persona = new Persona();

		parse_str(file_get_contents("php://input"),$post_vars);
		
		$persona -> setIdPersona($post_vars['id']);

		$resultado = $personaDAO -> eliminarPersona($persona);

		if($resultado == 1)
		{
			header("HTTP/1.1 200 Ok");
			echo $resultado;
		}
		else if($resultado == 0)
			echo "Error al eliminar";
		
		exit;
	}
	
	//Si no corresponde a ninguna opción anterior
	header("HTTP/1.1 400 Bad Request");
?>