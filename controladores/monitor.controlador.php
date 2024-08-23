<?php 

class ControladorMonitor{


	static public function ctrMostrarMonitor(){
		
		$respuesta = ModeloMonitor::mdlMostrarMonitor();

		return $respuesta;
	}

	static public function ctrRegistrarMonitor($numero_inventario,$tipo_conector,$idmarca,$modelo,$numero_serie,$pulgadas,$fecha_adquisicion,$precio,$estado){

		$respuesta = ModeloMonitor::mdlRegistrarMonitor($numero_inventario,$tipo_conector,$idmarca,$modelo,$numero_serie,$pulgadas,$fecha_adquisicion,$precio,$estado);

		return $respuesta;
	}

	static public function ctrEliminarMonitor($idmonitor){

		$respuesta = ModeloMonitor::mdlEliminarMonitor($idmonitor);

		return $respuesta;
	}

	static public function ctrActualizarMonitor($idmonitor,$numero_inventario,$tipo_conector,$idmarca,$modelo,$numero_serie,$pulgadas,$fecha_adquisicion,$precio,$estado){

		$respuesta = ModeloMonitor::mdlActualizarMonitor($idmonitor,$numero_inventario,$tipo_conector,$idmarca,$modelo,$numero_serie,$pulgadas,$fecha_adquisicion,$precio,$estado);

		return $respuesta;
	}

}
