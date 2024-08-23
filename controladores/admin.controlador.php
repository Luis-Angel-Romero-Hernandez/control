<?php 

class ControladorAdmin{


	static public function ctrMostrarAdmin(){
		
		$respuesta = ModeloAdmin::mdlMostrarAdmin();

		return $respuesta;
	}

	static public function ctrRegistrarAdmin($username,$nombres,$apellidos,$password,$rol_id){

		$respuesta = ModeloAdmin::mdlRegistrarAdmin($username,$nombres,$apellidos,$password,$rol_id);

		return $respuesta;
	}

	static public function ctrEliminarAdmin($idadministrador){

		$respuesta = ModeloAdmin::mdlEliminarAdmin($idadministrador);

		return $respuesta;
	}

	static public function ctrActualizarAdmin($idadministrador,$username,$nombres,$apellidos,$password,$rol_id){

		$respuesta = ModeloAdmin::mdlActualizarAdmin($idadministrador,$username,$nombres,$apellidos,$password,$rol_id);

		return $respuesta;
	}

}
