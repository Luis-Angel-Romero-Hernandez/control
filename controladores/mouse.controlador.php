<?php 

class ControladorMouse{


	static public function ctrMostrarMouse(){
		
		$respuesta = ModeloMouse::mdlMostrarMouse();

		return $respuesta;
	}

	static public function ctrRegistrarMouse($numero_inventario,$tipo_conector,$idmarca,$modelo,$fecha_adquisicion,$precio,$estado){

		$respuesta = ModeloMouse::mdlRegistrarMouse($numero_inventario,$tipo_conector,$idmarca,$modelo,$fecha_adquisicion,$precio,$estado);

		return $respuesta;
	}

	static public function ctrEliminarMouse($idmouse){

		$respuesta = ModeloMouse::mdlEliminarMouse($idmouse);

		return $respuesta;
	}

	static public function ctrActualizarMouse($idmouse,$numero_inventario,$tipo_conector,$idmarca,$modelo,$fecha_adquisicion,$precio,$estado){

		$respuesta = ModeloMouse::mdlActualizarMouse($idmouse,$numero_inventario,$tipo_conector,$idmarca,$modelo,$fecha_adquisicion,$precio,$estado);

		return $respuesta;
	}

}
