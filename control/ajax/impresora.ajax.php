<?php

require_once "../controladores/impresora.controlador.php";
require_once "../modelos/impresora.modelo.php";

class ajaxImpresora
{

	public $idimpresora;
	public $numero_inventario;
	public $modelo;
	public $marca;
	public $numero_serie;
	public $velocidad;
	public $estado;
	public $fecha_adquisicion;

	public function MostrarImpresora()
	{

		$respuesta = ControladorImpresora::ctrMostrarImpresora();

		echo json_encode($respuesta);
	}

	public function registrarImpresora()
	{

		$respuesta = ControladorImpresora::ctrRegistrarImpresora($this->numero_inventario, $this->modelo, $this->marca, $this->numero_serie, $this->velocidad,$this->fecha_adquisicion, $this->estado);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}

	public function eliminarImpresora()
	{

		$respuesta = ControladorImpresora::ctrEliminarImpresora($this->idimpresora);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}

	public function actualizarImpresora()
	{

		$respuesta = ControladorImpresora::ctrActualizarImpresora($this->idimpresora, $this->numero_inventario, $this->modelo, $this->marca, $this->numero_serie, $this->velocidad, $this->fecha_adquisicion, $this->estado);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}
}

if (!isset($_POST["accion"])) {
	$respuesta = new ajaxImpresora();
	$respuesta->MostrarImpresora();
} else {

	if ($_POST["accion"] == "registrar") {
		$insertar = new ajaxImpresora();
		$insertar->numero_inventario = $_POST["numero_inventario"];
		$insertar->modelo = $_POST["modelo"];
		$insertar->marca = $_POST["marca"];
		$insertar->numero_serie = $_POST["numero_serie"];
		$insertar->velocidad = $_POST["velocidad"];
		$insertar->fecha_adquisicion = $_POST["fecha_adquisicion"];
		$insertar->estado = $_POST["estado"];
		$insertar->registrarImpresora();
	}

	if ($_POST["accion"] == "eliminar") {
		$eliminar = new ajaxImpresora();

		$eliminar->idimpresora = $_POST["idimpresora"];

		$eliminar->eliminarImpresora();
	}

	if ($_POST["accion"] == "actualizar") {
		$actualizar = new ajaxImpresora();

		$actualizar->idimpresora = $_POST["idimpresora"];
		$actualizar->numero_inventario = $_POST["numero_inventario"];
		$actualizar->modelo = $_POST["modelo"];
		$actualizar->marca = $_POST["marca"];
		$actualizar->numero_serie = $_POST["numero_serie"];
		$actualizar->velocidad = $_POST["velocidad"];
		$actualizar->fecha_adquisicion = $_POST["fecha_adquisicion"];
		$actualizar->estado = $_POST["estado"];

		$actualizar->actualizarImpresora();
	}
}
