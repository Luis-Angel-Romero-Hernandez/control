<?php 

require_once "../controladores/marca.controlador.php";
require_once "../modelos/marca.modelo.php";

class ajaxMarca{

	public $idmarca;
	public $nombre;

	public function MostrarMarca(){

		$respuesta = ControladorMarca::ctrMostrarMarca();

		echo json_encode($respuesta); 
	}

	public function registrarMarca(){
		
		$respuesta = ControladorMarca::ctrRegistrarMarca($this->nombre);

		$respuesta = strtoupper($respuesta);

		echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
	}

	public function eliminarMarca(){
		
		$respuesta = ControladorMarca::ctrEliminarMarca($this->idmarca);

		echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
	}

	public function actualizarMarca(){
		
		$respuesta = ControladorMarca::ctrActualizarMarca($this->idmarca,$this->nombre);

		echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
	}
	
}

if(!isset($_POST["accion"])){
	$respuesta = new ajaxMarca();
	$respuesta -> MostrarMarca();
}else{

	if($_POST["accion"] == "registrar"){
		$insertar = new ajaxMarca();
		$insertar->nombre = $_POST["nombre"];
		$insertar->registrarMarca();
	}

	if($_POST["accion"] == "eliminar"){
		$eliminar = new ajaxMarca();

		$eliminar->idmarca = $_POST["idmarca"];
		
		$eliminar->eliminarMarca();
	}

	if($_POST["accion"] == "actualizar"){
		$actualizar = new ajaxMarca();

		$actualizar->idmarca = $_POST["idmarca"];
		$actualizar->nombre = $_POST["nombre"];

		$actualizar->actualizarMarca();
	}

}




