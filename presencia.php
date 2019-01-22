<?php

require_once("conexion.php");
class presencia extends conexion{

	public function alta(){

	
		$empleado = $_Post["empleado"];
		$fecha = $_Post["fecha"];
		$hora_entrada = $_Post["hora_entrada"];
		$hora_salida = $_Post["hora_salida"];
		
		$this->sentencia= "INSERT INTO presencia VALUES (null,'$empleado', '$fecha', '$hora_entrada', '$hora_salida');";
		$this->ejecutar_sentencia();


	}


	public function baja(){
		$idEliminar = $_POST["idEliminar"];
		$this->sentencia = "DELETE FROM presencia WHERE id_usuario=$idEliminar";
		$this->ejecutar_sentencia();
	}
	}


	public function consulta(){
		$this->sentencia = "SELECT * FROM presencia";
		return $this->obtener_sentencia();
	}


	public function modificacion(){}

}