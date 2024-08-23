<?php 

class ControladorAreas{

	static public function ctrMostrarAreas(){
		
		$respuesta = ModeloAreas::mdlMostrarAreas();

		return $respuesta;
	}

	static public function ctrRegistrarAreas($nombre){

		$respuesta = ModeloAreas::mdlRegistrarAreas($nombre);

		return $respuesta;
	}

	static public function ctrEliminarArea($idarea){

		$respuesta = ModeloAreas::mdlEliminarArea($idarea);

		return $respuesta;
	}

	static public function ctrActualizarArea($idarea,$nombre){

		$respuesta = ModeloAreas::mdlActualizarArea($idarea,$nombre);

		return $respuesta;
	}

}