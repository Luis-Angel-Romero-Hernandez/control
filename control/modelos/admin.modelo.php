<?php

require_once "conexion.php";

class ModeloAdmin
{

	static public function mdlMostrarAdmin()
	{

		$stmt = Conexion::conectar()->prepare("SELECT idadministrador,username,nombres,apellidos,password,rol_id,'X' as acciones FROM administradores");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt = null;
	}

	static public function mdlRegistrarAdmin($nombres, $apellidos, $username, $password, $rol_id)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO administradores(username,nombres,apellidos,password,rol_id) VALUES (:username,:nombres,:apellidos,:password,:rol_id)");

		$stmt->bindParam(":username", $username, PDO::PARAM_STR);
		$stmt->bindParam(":nombres", $nombres, PDO::PARAM_STR);
		$stmt->bindParam(":apellidos", $apellidos, PDO::PARAM_STR);
		$stmt->bindParam(":password", $password, PDO::PARAM_STR);
		$stmt->bindParam(":rol_id", $rol_id, PDO::PARAM_INT);


		if ($stmt->execute()) {
			return "Se registró correctamente";
		} else {
			return "Error, no se pudo registrar";
		}

		$stmt = null;
	}

	static public function mdlEliminarAdmin($idadministrador)
	{

		$stmt = Conexion::conectar()->prepare("DELETE FROM administradores WHERE idadministrador = :idadministrador");

		$stmt->bindParam(":idadministrador", $idadministrador, PDO::PARAM_INT);

		if ($stmt->execute()) {
			return "Se eliminó correctamente";
		} else {
			return "Error, no se pudo eliminar";
		}

		$stmt = null;
	}

	static public function mdlActualizarAdmin($idadministrador,$username, $nombres, $apellidos, $password, $rol_id)
	{

		$stmt = Conexion::conectar()->prepare("UPDATE administradores
											   SET username = :username,
											   nombres = :nombres,
											   	   apellidos = :apellidos,
													  password = :password,
													  rol_id = :rol_id
											   WHERE idadministrador = :idadministrador");

		$stmt->bindParam(":idadministrador", $idadministrador, PDO::PARAM_INT);
		$stmt->bindParam(":username", $username, PDO::PARAM_STR);
		$stmt->bindParam(":nombres", $nombres, PDO::PARAM_STR);
		$stmt->bindParam(":apellidos", $apellidos, PDO::PARAM_STR);
		$stmt->bindParam(":password", $password, PDO::PARAM_STR);
		$stmt->bindParam(":rol_id", $rol_id, PDO::PARAM_INT);

		if ($stmt->execute()) {
			return "Se actualizó correctamente";
		} else {
			return "Error, no se pudo actualizar";
		}

		$stmt = null;
	}
}
