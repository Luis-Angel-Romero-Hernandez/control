<?php

require_once "../controladores/admin.controlador.php";
require_once "../modelos/admin.modelo.php";

class ajaxAdmin
{

	public $idadministrador;
	public $username;
	public $nombres;
	public $apellidos;
	public $password;
	public $rol_id;


	public function MostrarAdmin()
	{

		$respuesta = ControladorAdmin::ctrMostrarAdmin();

		echo json_encode($respuesta);
	}

	public function registrarAdmin()
	{

		$respuesta = ControladorAdmin::ctrRegistrarAdmin($this->username,$this->nombres, $this->apellidos, $this->password, $this->rol_id);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}

	public function eliminarAdmin()
	{

		$respuesta = ControladorAdmin::ctrEliminarAdmin($this->idadministrador);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}

	public function actualizarAdmin()
	{

		$respuesta = ControladorAdmin::ctrActualizarAdmin($this->idadministrador,$this->username, $this->nombres, $this->apellidos, $this->password, $this->rol_id);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}
}

if (!isset($_POST["accion"])) {
	$respuesta = new ajaxAdmin();
	$respuesta->MostrarAdmin();
} else {

	if ($_POST["accion"] == "registrar") {
		$insertar = new ajaxAdmin();
		$insertar->username = $_POST["username"];
		$insertar->nombres = $_POST["nombres"]; 
		$insertar->apellidos = $_POST["apellidos"];
		$insertar->password = md5($_POST["password"]);
		$insertar->rol_id = $_POST["rol_id"];
		$insertar->registrarAdmin();
	}

	if ($_POST["accion"] == "eliminar") {
		$eliminar = new ajaxAdmin();

		$eliminar->idadministrador = $_POST["idadministrador"];

		$eliminar->eliminarAdmin();
	}

	if ($_POST["accion"] == "actualizar") {
		$actualizar = new ajaxAdmin();

		$actualizar->idadministrador = $_POST["idadministrador"];
		$actualizar->username = $_POST["username"];
		$actualizar->nombres = $_POST["nombres"];
		$actualizar->apellidos = $_POST["apellidos"];
		$actualizar->password = md5($_POST["password"]);
		$actualizar->rol_id = $_POST["rol_id"];

		$actualizar->actualizarAdmin();
	}
}
