<?php

require_once("conexion.php");
class mantenimiento extends conexion{

	public function alta(){

		
		$recurso = $_Post["recurso"];
		$empleado = $_Post["empleado"];
		$fecha = $_Post["fecha"];
		$razon = $_Post["razon"];
		
		$this->sentencia= "INSERT INTO mantenimiento VALUES (null,'$recurso', '$empleado', '$fecha', '$razon');";
		$this->ejecutar_sentencia();


	}


	public function baja(){
		$idEliminar = $_POST["idEliminar"];
		$this->sentencia = "DELETE FROM mantenimiento WHERE id_usuario=$idEliminar";
		$this->ejecutar_sentencia();
	}
	}


	public function consulta(){
		$this->sentencia = "SELECT * FROM mantenimiento";
		return $this->obtener_sentencia();
	}


	public function modificacion(){}

}