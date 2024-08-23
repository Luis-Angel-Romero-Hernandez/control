<?php 

class ControladorImpresora{


	static public function ctrMostrarImpresora(){
		
		$respuesta = ModeloImpresora::mdlMostrarImpresora();

		return $respuesta;
	}

	static public function ctrRegistrarImpresora($numero_inventario,$modelo,$marca,$numero_serie,$velocidad,$fecha_adquisicion,$estado){

		$respuesta = ModeloImpresora::mdlRegistrarImpresora($numero_inventario,$modelo,$marca,$numero_serie,$velocidad,$fecha_adquisicion,$estado);

		return $respuesta;
	}

	static public function ctrEliminarImpresora($idimpresora){

		$respuesta = ModeloImpresora::mdlEliminarImpresora($idimpresora);

		return $respuesta;
	}

	static public function ctrActualizarImpresora($idimpresora,$numero_inventario,$modelo,$marca,$numero_serie,$velocidad,$fecha_adquisicion,$estado){

		$respuesta = ModeloImpresora::mdlActualizarImpresora($idimpresora,$numero_inventario,$modelo,$marca,$numero_serie,$velocidad,$fecha_adquisicion,$estado);

		return $respuesta;
	}

}
