<?php

require_once "../controladores/equipo.controlador.php";
require_once "../modelos/equipo.modelo.php";

class ajaxEquipos
{

	public $idequipo;
	public $numero_inventario;
	public $numero_serie;
	public $marca;
	public $disco_duro;
	public $procesador;
	public $ram;
	public $idtipo_equipo;
	public $estado;

	public function MostrarEquipos()
	{

		$respuesta = ControladorEquipos::ctrMostrarEquipos();

		echo json_encode($respuesta);
	}

	public function registrarEquipos()
	{

		$respuesta = ControladorEquipos::ctrRegistrarEquipos($this->numero_inventario, $this->numero_serie, $this->marca, $this->disco_duro, $this->procesador, $this->ram, $this->idtipo_equipo, $this->estado);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}

	public function eliminarEquipo()
	{

		$respuesta = ControladorEquipos::ctrEliminarEquipo($this->idequipo);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}

	public function actualizarEquipo()
	{

		$respuesta = ControladorEquipos::ctrActualizarEquipos($this->idequipo, $this->numero_inventario, $this->numero_serie, $this->marca, $this->disco_duro, $this->procesador, $this->ram, $this->idtipo_equipo, $this->estado);

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}
}

if (!isset($_POST["accion"])) {
	$respuesta = new ajaxEquipos();
	$respuesta->MostrarEquipos();
} else {

	if ($_POST["accion"] == "registrar") {
		$insertar = new ajaxEquipos();
		$insertar->numero_inventario = $_POST["numero_inventario"];
		$insertar->numero_serie = $_POST["numero_serie"];
		$insertar->marca = $_POST["marca"];
		$insertar->disco_duro = $_POST["disco_duro"];
		$insertar->procesador = $_POST["procesador"];
		$insertar->ram = $_POST["ram"];
		$insertar->idtipo_equipo = $_POST["idtipo_equipo"];
		$insertar->estado = $_POST["estado"];
		$insertar->registrarEquipos();
	}

	if ($_POST["accion"] == "eliminar") {
		$eliminar = new ajaxEquipos();

		$eliminar->idequipo = $_POST["idequipo"];

		$eliminar->eliminarEquipo();
	}

	if ($_POST["accion"] == "actualizar") {
		$actualizar = new ajaxEquipos();

		$actualizar->idequipo = $_POST["idequipo"];
		$actualizar->numero_inventario = $_POST["numero_inventario"];
		$actualizar->numero_serie = $_POST["numero_serie"];
		$actualizar->marca = $_POST["marca"];
		$actualizar->disco_duro = $_POST["disco_duro"];
		$actualizar->procesador = $_POST["procesador"];
		$actualizar->ram = $_POST["ram"];
		$actualizar->idtipo_equipo = $_POST["idtipo_equipo"];
		$actualizar->estado = $_POST["estado"];

		$actualizar->actualizarEquipo();
	}
}
