<?php

	class Usuario{

		private $nombre;
		private $apellido;
		private $correo;
		private $genero;
		private $tipoUsuario;
		private $accesoFormulario;

		public function __construct($nombre,
					$apellido,
					$correo){
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->correo = $correo;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getApellido(){
			return $this->apellido;
		}
		public function setApellido($apellido){
			$this->apellido = $apellido;
		}
		public function getCorreo(){
			return $this->correo;
		}
		public function setCorreo($correo){
			$this->correo = $correo;
		}
	
		public function __toString(){
			return "Nombre: " . $this->nombre . 
				" Apellido: " . $this->apellido . 
				" Correo: " . $this->correo;
		}

			public function insertarRegistro($conexion){
			$sql = sprintf(
					"INSERT INTO tbl_usuarios(nombre, apellido, 
					 correo) 
					 VALUES (%s,%s,%s)",
					$conexion->antiInyeccion($this->nombre),
					$conexion->antiInyeccion($this->apellido),
					$conexion->antiInyeccion($this->correo)
			);
			//echo $sql;
			$resultado = $conexion->ejecutarConsulta($sql);
		}
	}
?>