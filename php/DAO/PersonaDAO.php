<?php
	
	class PersonaDAO{

		function mostrarPersonas()
		{
			include("../conexion.php");

			//$sql = "SELECT * FROM personas";
			$sql = "CALL mostrar_personas()";
			$result = mysqli_query($conexion, $sql);

			while ($datos = mysqli_fetch_assoc($result)) 
				$arreglo['resultado'][]=$datos;
				//$arreglo['resultado'][]=array_map("utf8_encode", $datos);

			json_encode($arreglo);

			$conexion->close();
			
			return json_encode($arreglo);
			
		}

		function agregarPersona(Persona $persona){

			include("../conexion.php");

			$nombre = $persona -> getNombre();
			$apellido = $persona -> getApellido();
			$email = $persona -> getEmail();
			$telefono = $persona -> getTelefono();

			/*
			$sql = "INSERT INTO personas (nombre, apellido, email, telefono)
					VALUES ('$nombre','$apellido','$email','$telefono')";
			*/

			$sql = "CALL insertar_persona('$nombre', '$apellido', '$email', '$telefono')";
	
			$resultado = mysqli_query($conexion, $sql);
			
			$conexion->close();
			return $resultado;
		}

		function actualizarPersona(Persona $persona){

			include("../conexion.php");

			$id = $persona -> getIdPersona();
			$nombre = $persona -> getNombre();
			$apellido = $persona -> getApellido();
			$email = $persona -> getEmail();
			$telefono = $persona -> getTelefono();

			/*
			$sql = "UPDATE personas SET nombre = '$nombre', apellido = '$apellido', email = '$email', telefono = '$telefono'
			WHERE id = '$id' ";
			*/

			$sql = "CALL modificar_persona($id, '$nombre', '$apellido', '$email', '$telefono')";

			$resultado = mysqli_query($conexion, $sql);
			
			$conexion->close();
			return $resultado;
		}

		function eliminarPersona(Persona $persona){

			include("../conexion.php");

			$id = $persona -> getIdPersona();

			//$sql = "DELETE FROM personas WHERE id = '$id' ";
			$sql = "CALL eliminar_persona($id)";

			$resultado = mysqli_query($conexion, $sql);
			
			$conexion->close();
			return $resultado;
		}
	}

?>