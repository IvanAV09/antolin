<?php

require_once("conexion.php");
class cuestionario extends conexion{

	public function alta(){

	
		$p1 = $_Post["p1"];
		$p2 = $_Post["p2"];
		$p3 = $_Post["p3"];
		$p4 = $_Post["p4"];
		$p5 = $_Post["p5"];
		$p6 = $_Post["p6"];
		$p7 = $_Post["p7"];
		$p8 = $_Post["p8"];
		$p9 = $_Post["p9"];
		$p10 = $_Post["p10"];


		
		$this->sentencia= "INSERT INTO cuestionario VALUES (null, '$p1', 'p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10');";
		$this->ejecutar_sentencia();


	}


	public function baja(){
		$idEliminar = $_POST["idEliminar"];
		$this->sentencia = "DELETE FROM cuestionario WHERE id_usuario=$idEliminar";
		$this->ejecutar_sentencia();
	}
	


	public function consulta(){
		$this->sentencia = "SELECT * FROM cuestionario";
		return $this->obtener_sentencia();
	}


	public function modificacion(){}

}