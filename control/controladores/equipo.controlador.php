<?php 

class ControladorEquipos{

	static public function ctrMostrarEquipos(){
		
		$respuesta = ModeloEquipos::mdlMostrarEquipos();

		return $respuesta;
	}

	static public function ctrRegistrarEquipos( $numero_inventario, $numero_serie, $marca, $disco_duro, $procesador, $ram, $idtipo_equipo,$estado){

		$respuesta = ModeloEquipos::mdlRegistrarEquipos($numero_inventario, $numero_serie, $marca, $disco_duro, $procesador, $ram, $idtipo_equipo,$estado);

		return $respuesta;
	}

	static public function ctrEliminarEquipo($idequipo){

		$respuesta = ModeloEquipos::mdlEliminarEquipo($idequipo);

		return $respuesta;
	}

	static public function ctrActualizarEquipos($idequipo, $numero_inventario, $numero_serie, $marca, $disco_duro, $procesador, $ram, $idtipo_equipo,$estado){

		$respuesta = ModeloEquipos::mdlActualizarEquipo($idequipo, $numero_inventario, $numero_serie, $marca, $disco_duro, $procesador, $ram, $idtipo_equipo,$estado);

		return $respuesta;
	}

}