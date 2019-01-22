<?php

require_once("conexion.php");
class evaluacion extends conexion{

	public function alta(){

	
		$empleado = $_Post["empleado"];
		$R1 = $_Post["R1"];
		$R2 = $_Post["R2"];
		$R3 = $_Post["R3"];
		$R4 = $_Post["R4"];
		$R5 = $_Post["R5"];
		$R6 = $_Post["R6"];
		$R7 = $_Post["R7"];
		$R8 = $_Post["R8"];
		$R9 = $_Post["R9"];
		$R10 = $_Post["R10"];
		$cuestionario = $_Post["cuestionario"];

		
		$this->sentencia= "INSERT INTO evaluacion VALUES (null,'$empleado', '$R1', 'R2', '$R3', '$R4', '$R5', '$R6', '$R7', '$R8', '$R9', '$R10', 'cuestiomario');";
		$this->ejecutar_sentencia();


	}


	public function baja(){
		$idEliminar = $_POST["idEliminar"];
		$this->sentencia = "DELETE FROM evaluacion WHERE id_usuario=$idEliminar";
		$this->ejecutar_sentencia();
	}
	}


	public function consulta(){
		$this->sentencia = "SELECT * FROM evaluacion";
		return $this->obtener_sentencia();
	}


	public function modificacion(){}

}