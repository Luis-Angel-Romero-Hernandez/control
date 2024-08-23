<?php

require_once "../controladores/mouse.controlador.php";
require_once "../modelos/mouse.modelo.php";

class ajaxMouse
{

	public $idmouse;
	public $numero_inventario;
	public $tipo_conector;
	public $idmarca;
	public $modelo;
	public $estado;
	public $fecha_adquisicion;
	public $precio;

	public function MostrarMouse()
	{

		$respuesta = ControladorMouse::ctrMostrarMouse();

		echo json_encode($respuesta);
	}

	public function registrarMouse()
	{

		$respuesta = ControladorMouse::ctrRegistrarMouse($this->numero_inventario, $this->tipo_conector, $this->idmarca, $this->modelo, $this->fecha_adquisicion, $this->precio, $this->estado);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}

	public function eliminarMouse()
	{

		$respuesta = ControladorMouse::ctrEliminarMouse($this->idmouse);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}

	public function actualizarMouse()
	{

		$respuesta = ControladorMouse::ctrActualizarMouse($this->idmouse, $this->numero_inventario, $this->tipo_conector, $this->idmarca, $this->modelo, $this->fecha_adquisicion, $this->precio, $this->estado);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}
}

if (!isset($_POST["accion"])) {
	$respuesta = new ajaxMouse();
	$respuesta->MostrarMouse();
} else {

	if ($_POST["accion"] == "registrar") {
		$insertar = new ajaxMouse();
		$insertar->numero_inventario = $_POST["numero_inventario"];
		$insertar->tipo_conector = $_POST["tipo_conector"];
		$insertar->idmarca = $_POST["idmarca"];
		$insertar->modelo = $_POST["modelo"];
		$insertar->fecha_adquisicion = $_POST["fecha_adquisicion"];
		$insertar->precio = $_POST["precio"];
		$insertar->estado = $_POST["estado"];
		$insertar->registrarMouse();
	}

	if ($_POST["accion"] == "eliminar") {
		$eliminar = new ajaxMouse();

		$eliminar->idmouse = $_POST["idmouse"];

		$eliminar->eliminarMouse();
	}

	if ($_POST["accion"] == "actualizar") {
		$actualizar = new ajaxMouse();

		$actualizar->idmouse = $_POST["idmouse"];
		$actualizar->numero_inventario = $_POST["numero_inventario"];
		$actualizar->tipo_conector = $_POST["tipo_conector"];
		$actualizar->idmarca = $_POST["idmarca"];
		$actualizar->modelo = $_POST["modelo"];
		$actualizar->fecha_adquisicion = $_POST["fecha_adquisicion"];
		$actualizar->precio = $_POST["precio"];
		$actualizar->estado = $_POST["estado"];

		$actualizar->actualizarMouse();
	}
}
