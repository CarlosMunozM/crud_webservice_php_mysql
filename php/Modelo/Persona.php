<?php

	require_once("../Modelo/Persona.php");

	class Persona{

		private $idPersona, $nombre, $apellido, $email, $telefono;

		public function setIdPersona($idPersona)
		{
			$this -> idPersona = $idPersona;
		}

		public function getIdPersona()
		{
			return $this -> idPersona;
		}

		public function setNombre($nombre)
		{
			$this -> nombre = $nombre;
		}

		public function getNombre()
		{
			return $this -> nombre;
		}

		public function setApellido($apellido)
		{
			$this -> apellido = $apellido;
		}

		public function getApellido()
		{
			return $this -> apellido;
		}

		public function setEmail($email)
		{
			$this -> email = $email;
		}

		public function getEmail()
		{
			return $this -> email;
		}

		public function setTelefono($telefono)
		{
			$this -> telefono = $telefono;
		}

		public function getTelefono()
		{
			return $this -> telefono;
		}

	}
?>