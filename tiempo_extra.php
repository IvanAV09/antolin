<?php

require_once("conexion.php");
class balance extends conexion{

	public function alta(){

		$empleado = $_Post["empleado"];
		$horas = $_Post["horas"];
		$pago = $_Post["pago"];
		
		$this->sentencia= "INSERT INTO tiempo_extra VALUES (null,'$empleado', '$horas', '$pago');";
		$this->ejecutar_sentencia();


	}


	public function baja(){
		$idEliminar = $_POST["idEliminar"];
		$this->sentencia = "DELETE FROM tiempo_extra WHERE id_usuario=$idEliminar";
		$this->ejecutar_sentencia();
	}
	}


	public function consulta(){
		$this->sentencia = "SELECT * FROM tiempo_extra";
		return $this->obtener_sentencia();
	}


	public function modificacion(){}

}