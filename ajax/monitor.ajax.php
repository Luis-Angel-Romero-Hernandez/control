<?php

require_once "../controladores/monitor.controlador.php";
require_once "../modelos/monitor.modelo.php";

class ajaxMonitor
{

	public $idmonitor;
	public $numero_inventario;
	public $tipo_conector;
	public $idmarca;
	public $modelo;
	public $numero_serie;
	public $pulgadas;
	public $fecha_adquisicion;
	public $precio;
	public $estado;


	public function MostrarMonitor()
	{

		$respuesta = ControladorMonitor::ctrMostrarMonitor();

		echo json_encode($respuesta);
	}

	public function registrarMonitor()
	{

		$respuesta = ControladorMonitor::ctrRegistrarMonitor($this->numero_inventario, $this->tipo_conector, $this->idmarca, $this->modelo, $this->numero_serie, $this->pulgadas, $this->fecha_adquisicion, $this->precio, $this->estado);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}

	public function eliminarMonitor()
	{

		$respuesta = ControladorMonitor::ctrEliminarMonitor($this->idmonitor);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}

	public function actualizarMonitor()
	{

		$respuesta = ControladorMonitor::ctrActualizarMonitor($this->idmonitor, $this->numero_inventario, $this->tipo_conector, $this->idmarca, $this->modelo, $this->numero_serie, $this->pulgadas, $this->fecha_adquisicion, $this->precio, $this->estado);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}
}

if (!isset($_POST["accion"])) {
	$respuesta = new ajaxMonitor();
	$respuesta->MostrarMonitor();
} else {

	if ($_POST["accion"] == "registrar") {
		$insertar = new ajaxMonitor();
		$insertar->numero_inventario = $_POST["numero_inventario"];
		$insertar->tipo_conector = $_POST["tipo_conector"];
		$insertar->idmarca = $_POST["idmarca"];
		$insertar->modelo = $_POST["modelo"];
		$insertar->numero_serie = $_POST["numero_serie"];
		$insertar->pulgadas = $_POST["pulgadas"];
		$insertar->fecha_adquisicion = $_POST["fecha_adquisicion"];
		$insertar->precio = $_POST["precio"];
		$insertar->estado = $_POST["estado"];
		$insertar->registrarMonitor();
	}

	if ($_POST["accion"] == "eliminar") {
		$eliminar = new ajaxMonitor();

		$eliminar->idmonitor = $_POST["idmonitor"];

		$eliminar->eliminarMonitor();
	}

	if ($_POST["accion"] == "actualizar") {
		$actualizar = new ajaxMonitor();

		$actualizar->idmonitor = $_POST["idmonitor"];
		$actualizar->numero_inventario = $_POST["numero_inventario"];
		$actualizar->tipo_conector = $_POST["tipo_conector"];
		$actualizar->idmarca = $_POST["idmarca"];
		$actualizar->modelo = $_POST["modelo"];
		$actualizar->numero_serie = $_POST["numero_serie"];
		$actualizar->pulgadas = $_POST["pulgadas"];
		$actualizar->fecha_adquisicion = $_POST["fecha_adquisicion"];
		$actualizar->precio = $_POST["precio"];
		$actualizar->estado = $_POST["estado"];

		$actualizar->actualizarMonitor();
	}
}
