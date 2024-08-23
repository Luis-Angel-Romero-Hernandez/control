<?php 

class ControladorInventario{

	static public function ctrMostrarInventario(){
		
		$respuesta = ModeloInventario::mdlMostrarInventario();

		return $respuesta;
	}

	static public function ctrRegistrarInventario($fecha,$idusuario,$idteclado,$idmouse,$idmonitor,$idequipo,$idimpresora,$idtelefono){

		$respuesta = ModeloInventario::mdlRegistrarInventario($fecha,$idusuario,$idteclado,$idmouse,$idmonitor,$idequipo,$idimpresora,$idtelefono);

		return $respuesta;
	}

	static public function ctrEliminarInventario($numero_inventario){

		$respuesta = ModeloInventario::mdlEliminarInventario($numero_inventario);

		return $respuesta;
	}

	static public function ctrActualizarInventario($numero_inventario,$fecha,$idusuario,$idteclado,$idmouse,$idmonitor,$idequipo,$idimpresora,$idtelefono){

		$respuesta = ModeloInventario::mdlActualizarInventario($numero_inventario,$fecha,$idusuario,$idteclado,$idmouse,$idmonitor,$idequipo,$idimpresora,$idtelefono);

		return $respuesta;
	}

}