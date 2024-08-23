<?php

require_once "../controladores/teclado.controlador.php";
require_once "../modelos/teclado.modelo.php";

class ajaxTeclado
{

	public $idteclado;
	public $numero_inventario;
	public $tipo_conector;
	public $idmarca;
	public $modelo;
	public $estado;
	public $fecha_adquisicion;
	public $precio;

	public function MostrarTeclado()
	{

		$respuesta = ControladorTeclado::ctrMostrarTeclado();

		echo json_encode($respuesta);
	}

	public function registrarTeclado()
	{

		$respuesta = ControladorTeclado::ctrRegistrarTeclado($this->numero_inventario, $this->tipo_conector, $this->idmarca, $this->modelo, $this->fecha_adquisicion, $this->precio, $this->estado);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}

	public function eliminarTeclado()
	{

		$respuesta = ControladorTeclado::ctrEliminarTeclado($this->idteclado);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}

	public function actualizarTeclado()
	{

		$respuesta = ControladorTeclado::ctrActualizarTeclado($this->idteclado, $this->numero_inventario, $this->tipo_conector, $this->idmarca, $this->modelo, $this->fecha_adquisicion, $this->precio, $this->estado);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}
}

if (!isset($_POST["accion"])) {
	$respuesta = new ajaxTeclado();
	$respuesta->MostrarTeclado();
} else {

	if ($_POST["accion"] == "registrar") {
		$insertar = new ajaxTeclado();
		$insertar->numero_inventario = $_POST["numero_inventario"];
		$insertar->tipo_conector = $_POST["tipo_conector"];
		$insertar->idmarca = $_POST["idmarca"];
		$insertar->modelo = $_POST["modelo"];
		$insertar->fecha_adquisicion = $_POST["fecha_adquisicion"];
		$insertar->precio = $_POST["precio"];
		$insertar->estado = $_POST["estado"];
		$insertar->registrarTeclado();
	}

	if ($_POST["accion"] == "eliminar") {
		$eliminar = new ajaxTeclado();

		$eliminar->idteclado = $_POST["idteclado"];

		$eliminar->eliminarTeclado();
	}

	if ($_POST["accion"] == "actualizar") {
		$actualizar = new ajaxTeclado();

		$actualizar->idteclado = $_POST["idteclado"];
		$actualizar->numero_inventario = $_POST["numero_inventario"];
		$actualizar->tipo_conector = $_POST["tipo_conector"];
		$actualizar->idmarca = $_POST["idmarca"];
		$actualizar->modelo = $_POST["modelo"];
		$actualizar->fecha_adquisicion = $_POST["fecha_adquisicion"];
		$actualizar->precio = $_POST["precio"];
		$actualizar->estado = $_POST["estado"];

		$actualizar->actualizarTeclado();
	}
}
