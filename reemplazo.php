<?php

require_once("conexion.php");
class reemplazo extends conexion{

	public function alta(){

		
		$recurso = $_Post["recurso"];
		$empleado = $_Post["empleado"];
		$fecha = $_Post["fecha"];
		$falla = $_Post["falla"];
		
		$this->sentencia= "INSERT INTO reemplazo VALUES (null,'$recurso', '$empleado', '$fecha', '$falla');";
		$this->ejecutar_sentencia();


	}


	public function baja(){
		$idEliminar = $_POST["idEliminar"];
		$this->sentencia = "DELETE FROM reemplazo WHERE id_usuario=$idEliminar";
		$this->ejecutar_sentencia();
	}
	}


	public function consulta(){
		$this->sentencia = "SELECT * FROM reemplazo";
		return $this->obtener_sentencia();
	}


	public function modificacion(){}

}