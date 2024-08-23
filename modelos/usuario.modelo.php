<?php

require_once "conexion.php";

class ModeloUsuario
{

	static public function mdlMostrarUsuario()
	{

		$stmt = Conexion::conectar()->prepare("SELECT idusuario,nombre,apellidos,cargo,idarea,'X' as acciones FROM usuario");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt = null;
	}

	static public function mdlRegistrarUsuario($nombre, $apellidos,$cargo, $idarea)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO usuario(nombre,apellidos,cargo,idarea) VALUES (:nombre,:apellidos,:cargo,:idarea)");

		$stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
		$stmt->bindParam(":apellidos", $apellidos, PDO::PARAM_STR);
		$stmt->bindParam(":cargo", $cargo, PDO::PARAM_STR);
		$stmt->bindParam(":idarea", $idarea, PDO::PARAM_INT);
		

		if ($stmt->execute()) {
			return "Se registró correctamente";
		} else {
			return "Error, no se pudo registrar";
		}

		$stmt = null;
	}

	static public function mdlEliminarUsuario($idusuario)
	{

		$stmt = Conexion::conectar()->prepare("DELETE FROM usuario WHERE idusuario = :idusuario");

		$stmt->bindParam(":idusuario", $idusuario, PDO::PARAM_INT);

		if ($stmt->execute()) {
			return "Se eliminó correctamente";
		} else {
			return "Error, no se pudo eliminar";
		}

		$stmt = null;
	}

	static public function mdlActualizarUsuario($idusuario, $nombre,$apellidos, $cargo, $idarea)
	{

		$stmt = Conexion::conectar()->prepare("UPDATE usuario
											   SET nombre = :nombre,
											   apellidos = :apellidos,
											   	   cargo = :cargo,
													  idarea = :idarea
											   WHERE idusuario = :idusuario");

		$stmt->bindParam(":idusuario", $idusuario, PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
		$stmt->bindParam(":apellidos", $apellidos, PDO::PARAM_STR);
		$stmt->bindParam(":cargo", $cargo, PDO::PARAM_STR);
		$stmt->bindParam(":idarea", $idarea, PDO::PARAM_INT);

		if ($stmt->execute()) {
			return "Se actualizó correctamente";
		} else {
			return "Error, no se pudo actualizar";
		}

		$stmt = null;
	}
}
