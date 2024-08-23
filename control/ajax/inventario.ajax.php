<?php 

require_once "../controladores/inventario.controlador.php";
require_once "../modelos/inventario.modelo.php";

class ajaxInventario{

	public $numero_inventario;
	public $fecha;
	public $idusuario;
	public $idteclado;
	public $idmouse;
	public $idmonitor;
	public $idequipo;
	public $idimpresora;
	public $idtelefono;

	public function MostrarInventario(){

		$respuesta = ControladorInventario::ctrMostrarInventario();

		echo json_encode($respuesta);
	}

	public function registrarInventario(){
		
		$respuesta = ControladorInventario::ctrRegistrarInventario( $this->fecha,$this->idusuario, $this->idteclado,$this->idmouse, $this->idmonitor,$this->idequipo, $this->idimpresora,$this->idtelefono);

		echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
	}

	public function eliminarInventario(){
		
		$respuesta = ControladorInventario::ctrEliminarInventario($this->numero_inventario);

		echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
	}

	public function actualizarInventario(){
		
		$respuesta = ControladorInventario::ctrActualizarInventario($this->numero_inventario, $this->fecha,$this->idusuario, $this->idteclado,$this->idmouse, $this->idmonitor,$this->idequipo, $this->idimpresora,$this->idtelefono);

		echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
	}
	
}

if(!isset($_POST["accion"])){
	$respuesta = new ajaxInventario();
	$respuesta -> MostrarInventario();
}else{

	if($_POST["accion"] == "registrar"){
		$insertar = new ajaxInventario();
		$insertar->fecha = $_POST["fecha"];
		$insertar->idusuario = $_POST["idusuario"];
		$insertar->idteclado = $_POST["idteclado"];
		$insertar->idmouse = $_POST["idmouse"];
		$insertar->idmonitor = $_POST["idmonitor"];
		$insertar->idequipo = $_POST["idequipo"];
		$insertar->idimpresora = $_POST["idimpresora"];
		$insertar->idtelefono = $_POST["idtelefono"];
		$insertar->registrarInventario();
	}

	if($_POST["accion"] == "eliminar"){
		$eliminar = new ajaxInventario();

		$eliminar->numero_inventario = $_POST["numero_inventario"];
		
		$eliminar->eliminarInventario();
	}

	if($_POST["accion"] == "actualizar"){
		$actualizar = new ajaxInventario();

		$actualizar->numero_inventario = $_POST["numero_inventario"];
		$actualizar->fecha = $_POST["fecha"];
		$actualizar->idusuario = $_POST["idusuario"];
		$actualizar->idteclado = $_POST["idteclado"];
		$actualizar->idmouse = $_POST["idmouse"];
		$actualizar->idmonitor = $_POST["idmonitor"];
		$actualizar->idequipo = $_POST["idequipo"];
		$actualizar->idimpresora = $_POST["idimpresora"];
		$actualizar->idtelefono = $_POST["idtelefono"];
		
		$actualizar->actualizarInventario();
	}

}




