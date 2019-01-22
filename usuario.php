<?php

require_once("conexion.php");
class usuario extends conexion{

	public function alta(){

		
		$nombre = $_Post["cliente"];
		$password = $_Post["password"];
		$empleado = $_Post["empleado"];
		
		$this->sentencia= "INSERT INTO usuario VALUES (null,'$nombre', '$password', '$empleado');";
		$this->ejecutar_sentencia();


	}


	public function baja(){
		$idEliminar = $_POST["idEliminar"];
		$this->sentencia = "DELETE FROM usuario WHERE id_usuario=$idEliminar";
		$this->ejecutar_sentencia();
	}



	public function consulta(){
		$this->sentencia = "SELECT * FROM usuario";
		return $this->obtener_sentencia();
	}


	public function modificacion(){
		$idModificar = $_POST["idModificar"]
		$nombre = $_Post["cliente"];
		$password = $_Post["password"];
		$empleado = $_Post["empleado"];

		$this->sentencia= "UPDATE usuario SET nombre='$nombre', password= '$password', empleado='$empleado' WHERE id_materia=$idModificar;"
		$this->ejecutar_sentencia();
	}

}