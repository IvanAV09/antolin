<?php

require_once("conexion.php");
class nomina extends conexion{

	public function alta(){

	
		$empleado = $_Post["empleado"];
		$fecha = $_Post["fecha"];
		$monto = $_Post["monto"];

		
		$this->sentencia= "INSERT INTO nomina VALUES (null,'$empleado', '$fecha', '$monto');";
		$this->ejecutar_sentencia();


	}


	public function baja(){
		$idEliminar = $_POST["idEliminar"];
		$this->sentencia = "DELETE FROM nomina WHERE id_usuario=$idEliminar";
		$this->ejecutar_sentencia();
	}
	}


	public function consulta(){
		$this->sentencia = "SELECT * FROM nomina";
		return $this->obtener_sentencia();
	}


	public function modificacion(){}

}