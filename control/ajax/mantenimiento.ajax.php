<?php

require_once "../controladores/mantenimiento.controlador.php";
require_once "../modelos/mantenimiento.modelo.php";

class ajaxMantenimiento
{

	public $numero_inventario;
	public $idmantenimiento;
	public $fecha_mantenimiento;
	public $observaciones;
	public $estado;

	public function MostrarMantenimiento()
	{

		$respuesta = ControladorMantenimiento::ctrMostrarMantenimiento();

		echo json_encode($respuesta);
	}

	public function registrarMantenimiento()
	{

		$respuesta = ControladorMantenimiento::ctrRegistrarMantenimiento($this->numero_inventario, $this->fecha_mantenimiento, $this->observaciones,$this->estado);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}

	public function eliminarMantenimiento()
	{

		$respuesta = ControladorMantenimiento::ctrEliminarMantenimiento($this->idmantenimiento);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}

	public function actualizarMantenimiento()
	{

		$respuesta = ControladorMantenimiento::ctrActualizarMantenimiento( $this->idmantenimiento,$this->numero_inventario, $this->fecha_mantenimiento, $this->observaciones,$this->estado);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}
}

if (!isset($_POST["accion"])) {
	$respuesta = new ajaxMantenimiento();
	$respuesta->MostrarMantenimiento();
} else {

	if ($_POST["accion"] == "registrar") {
		$insertar = new ajaxMantenimiento();
		$insertar->numero_inventario = $_POST["numero_inventario"];
		$insertar->fecha_mantenimiento = $_POST["fecha_mantenimiento"];
		$insertar->observaciones = $_POST["observaciones"];
		$insertar->estado = $_POST["estado"];
		$insertar->registrarMantenimiento();
	}

	if ($_POST["accion"] == "eliminar") {
		$eliminar = new ajaxMantenimiento();

		$eliminar->idmantenimiento = $_POST["idmantenimiento"];

		$eliminar->eliminarMantenimiento();
	}

	if ($_POST["accion"] == "actualizar") {
		$actualizar = new ajaxMantenimiento();

		$actualizar->idmantenimiento = $_POST["idmantenimiento"];
		$actualizar->numero_inventario = $_POST["numero_inventario"];
		$actualizar->fecha_mantenimiento = $_POST["fecha_mantenimiento"];
		$actualizar->observaciones = $_POST["observaciones"];
		$actualizar->estado = $_POST["estado"];

		$actualizar->actualizarMantenimiento();
	}
}
