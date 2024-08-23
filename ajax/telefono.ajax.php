<?php

require_once "../controladores/telefono.controlador.php";
require_once "../modelos/telefono.modelo.php";

class ajaxTelefono
{

	public $idtelefono;
	public $numero_inventario;
	public $marca;
	public $modelo;
	public $estado;

	public function MostrarTelefono()
	{

		$respuesta = ControladorTelefono::ctrMostrarTelefono();

		echo json_encode($respuesta);
	}

	public function registrarTelefono()
	{

		$respuesta = ControladorTelefono::ctrRegistrarTelefono($this->numero_inventario, $this->marca, $this->modelo, $this->estado);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}

	public function eliminarTelefono()
	{

		$respuesta = ControladorTelefono::ctrEliminarTelefono($this->idtelefono);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}

	public function actualizarTelefono()
	{

		$respuesta = ControladorTelefono::ctrActualizarTelefono($this->idtelefono, $this->numero_inventario, $this->marca, $this->modelo, $this->estado);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}
}

if (!isset($_POST["accion"])) {
	$respuesta = new ajaxTelefono();
	$respuesta->MostrarTelefono();
} else {

	if ($_POST["accion"] == "registrar") {
		$insertar = new ajaxTelefono();
		$insertar->numero_inventario = $_POST["numero_inventario"];
		$insertar->marca = $_POST["marca"];
		$insertar->modelo = $_POST["modelo"];
		$insertar->estado = $_POST["estado"];
		$insertar->registrarTelefono();
	}

	if ($_POST["accion"] == "eliminar") {
		$eliminar = new ajaxTelefono();

		$eliminar->idtelefono = $_POST["idtelefono"];

		$eliminar->eliminarTelefono();
	}

	if ($_POST["accion"] == "actualizar") {
		$actualizar = new ajaxTelefono();

		$actualizar->idtelefono = $_POST["idtelefono"];
		$actualizar->numero_inventario = $_POST["numero_inventario"];
		$actualizar->marca = $_POST["marca"];
		$actualizar->modelo = $_POST["modelo"];
		$actualizar->estado = $_POST["estado"];

		$actualizar->actualizarTelefono();
	}
}
