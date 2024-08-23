<?php

require_once "../controladores/usuario.controlador.php";
require_once "../modelos/usuario.modelo.php";

class ajaxUsuario
{

	public $idusuario;
	public $nombre;
	public $apellidos;
	public $cargo;
	public $idarea;

	public function MostrarUsuario()
	{

		$respuesta = ControladorUsuario::ctrMostrarUsuario();

		echo json_encode($respuesta);
	}

	public function registrarUsuario()
	{

		$respuesta = ControladorUsuario::ctrRegistrarUsuario($this->nombre,$this->apellidos, $this->cargo, $this->idarea);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}

	public function eliminarUsuario()
	{

		$respuesta = ControladorUsuario::ctrEliminarUsuario($this->idusuario);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}

	public function actualizarUsuario()
	{

		$respuesta = ControladorUsuario::ctrActualizarUsuario($this->idusuario, $this->nombre,$this->apellidos, $this->cargo, $this->idarea);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}
}

if (!isset($_POST["accion"])) {
	$respuesta = new ajaxUsuario();
	$respuesta->MostrarUsuario();
} else {

	if ($_POST["accion"] == "registrar") {
		$insertar = new ajaxUsuario();
		$insertar->nombre = $_POST["nombre"];
		$insertar->apellidos = $_POST["apellidos"];
		$insertar->cargo = $_POST["cargo"];
		$insertar->idarea = $_POST["idarea"];
		$insertar->registrarUsuario();
	}

	if ($_POST["accion"] == "eliminar") {
		$eliminar = new ajaxUsuario();

		$eliminar->idusuario = $_POST["idusuario"];

		$eliminar->eliminarUsuario();
	}

	if ($_POST["accion"] == "actualizar") {
		$actualizar = new ajaxUsuario();

		$actualizar->idusuario = $_POST["idusuario"];
		$actualizar->nombre = $_POST["nombre"];
		$actualizar->apellidos = $_POST["apellidos"];
		$actualizar->cargo = $_POST["cargo"];
		$actualizar->idarea = $_POST["idarea"];

		$actualizar->actualizarUsuario();
	}
}
