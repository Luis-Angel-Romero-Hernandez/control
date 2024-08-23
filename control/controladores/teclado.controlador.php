<?php 

class ControladorTeclado{


	static public function ctrMostrarTeclado(){
		
		$respuesta = ModeloTeclado::mdlMostrarTeclado();

		return $respuesta;
	}

	static public function ctrRegistrarTeclado($numero_inventario,$tipo_conector,$idmarca,$modelo,$fecha_adquisicion,$precio,$estado){

		$respuesta = ModeloTeclado::mdlRegistrarTeclado($numero_inventario,$tipo_conector,$idmarca,$modelo,$fecha_adquisicion,$precio,$estado);

		return $respuesta;
	}

	static public function ctrEliminarTeclado($idteclado){

		$respuesta = ModeloTeclado::mdlEliminarTeclado($idteclado);

		return $respuesta;
	}

	static public function ctrActualizarTeclado($idteclado,$numero_inventario,$tipo_conector,$idmarca,$modelo,$fecha_adquisicion,$precio,$estado){

		$respuesta = ModeloTeclado::mdlActualizarTeclado($idteclado,$numero_inventario,$tipo_conector,$idmarca,$modelo,$fecha_adquisicion,$precio,$estado);

		return $respuesta;
	}

}
