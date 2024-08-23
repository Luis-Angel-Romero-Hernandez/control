<?php 

class ControladorMarca{

	static public function ctrMostrarMarca(){
		
		$respuesta = ModeloMarca::mdlMostrarMarca();

		return $respuesta;
	}

	static public function ctrRegistrarMarca($nombre){

		$respuesta = ModeloMarca::mdlRegistrarMarca($nombre);

		$respuesta = strtoupper($respuesta);

		return (strtoupper($respuesta));
	}

	static public function ctrEliminarMarca($idmarca){

		$respuesta = ModeloMarca::mdlEliminarMarca($idmarca);

		return $respuesta;
	}

	static public function ctrActualizarMarca($idmarca,$nombre){

		$respuesta = ModeloMarca::mdlActualizarMarca($idmarca,$nombre);

		return $respuesta;
	}

}