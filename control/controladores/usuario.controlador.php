<?php 

class ControladorUsuario{


	static public function ctrMostrarUsuario(){
		
		$respuesta = ModeloUsuario::mdlMostrarUsuario();

		return $respuesta;
	}

	static public function ctrRegistrarUsuario($nombre,$apellidos,$cargo,$idarea){

		$respuesta = ModeloUsuario::mdlRegistrarUsuario($nombre,$apellidos,$cargo,$idarea);

		return $respuesta;
	}

	static public function ctrEliminarUsuario($idusuario){

		$respuesta = ModeloUsuario::mdlEliminarUsuario($idusuario);

		return $respuesta;
	}

	static public function ctrActualizarUsuario($idusuario,$nombre,$apellidos,$cargo,$idarea){

		$respuesta = ModeloUsuario::mdlActualizarUsuario($idusuario,$nombre,$apellidos,$cargo,$idarea);

		return $respuesta;
	}

}
