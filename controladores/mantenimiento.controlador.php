<?php 

class ControladorMantenimiento{


	static public function ctrMostrarMantenimiento(){
		
		$respuesta = ModeloMantenimiento::mdlMostrarMantenimiento();

		return $respuesta;
	}

	static public function ctrRegistrarMantenimiento($numero_inventario,$fecha_mantenimiento,$observaciones,$estado){

		$respuesta = ModeloMantenimiento::mdlRegistrarMantenimiento($numero_inventario,$fecha_mantenimiento,$observaciones,$estado);

		return $respuesta;
	}

	static public function ctrEliminarMantenimiento($idmantenimiento){

		$respuesta = ModeloMantenimiento::mdlEliminarMantenimiento($idmantenimiento);

		return $respuesta;
	}

	static public function ctrActualizarMantenimiento($idmantenimiento,$numero_inventario,$fecha_mantenimiento,$observaciones,$estado){

		$respuesta = ModeloMantenimiento::mdlActualizarMantenimiento($idmantenimiento,$numero_inventario,$fecha_mantenimiento,$observaciones,$estado);

		return $respuesta;
	}

}
