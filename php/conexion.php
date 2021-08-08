<?php

	$servidor = "localhost";
	$usuario = "root";
	$bd = "tabla_dinamica";
	$clave = "12345";
		 
	$conexion = new mysqli($servidor, $usuario, $clave, $bd);
	mysqli_set_charset($conexion, "utf8");
	

	/*
	if(conexion())
		echo "conectado";
	else
		echo "no conectado";
	*/
?>