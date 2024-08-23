<?php 

class ControladorTelefono{

	static public function ctrMostrarTelefono(){
		
		$respuesta = ModeloTelefono::mdlMostrarTelefono();

		return $respuesta;
	}

	static public function ctrRegistrarTelefono($numero_inventario,$marca, $modelo,$estado){

		$respuesta = ModeloTelefono::mdlRegistrarTelefono($numero_inventario,$marca, $modelo,$estado);

		return $respuesta;
	}

	static public function ctrEliminarTelefono($idtelefono){

		$respuesta = ModeloTelefono::mdlEliminarTelefono($idtelefono);

		return $respuesta;
	}

	static public function ctrActualizarTelefono($idtelefono,$numero_inventario,$marca, $modelo,$estado){

		$respuesta = ModeloTelefono::mdlActualizarTelefono($idtelefono,$numero_inventario,$marca, $modelo,$estado);

		return $respuesta;
	}

}