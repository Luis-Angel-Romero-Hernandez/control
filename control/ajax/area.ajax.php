<?php 

require_once "../controladores/area.controlador.php";
require_once "../modelos/area.modelo.php";

class ajaxAreas{

	public $idarea;
	public $nombre;

	public function MostrarAreas(){

		$respuesta = ControladorAreas::ctrMostrarAreas();

		echo json_encode($respuesta);
	}

	public function registrarAreas(){
		
		$respuesta = ControladorAreas::ctrRegistrarAreas($this->nombre);

		echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
	}

	public function eliminarArea(){
		
		$respuesta = ControladorAreas::ctrEliminarArea($this->idarea);

		echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
	}

	public function actualizarArea(){
		
		$respuesta = ControladorAreas::ctrActualizarArea($this->idarea,$this->nombre);

		echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
	}
	
}

if(!isset($_POST["accion"])){
	$respuesta = new ajaxAreas();
	$respuesta -> MostrarAreas();
}else{

	if($_POST["accion"] == "registrar"){
		$insertar = new ajaxAreas();
		$insertar->nombre = $_POST["nombre"];
		$insertar->registrarAreas();
	}

	if($_POST["accion"] == "eliminar"){
		$eliminar = new ajaxAreas();

		$eliminar->idarea = $_POST["idarea"];
		
		$eliminar->eliminarArea();
	}

	if($_POST["accion"] == "actualizar"){
		$actualizar = new ajaxAreas();

		$actualizar->idarea = $_POST["idarea"];
		$actualizar->nombre = $_POST["nombre"];
		
		$actualizar->actualizarArea();
	}

}




