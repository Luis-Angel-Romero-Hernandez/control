<?php

require_once "conexion.php";

class ModeloMarca
{

	static public function mdlMostrarMarca()
	{

		$stmt = Conexion::conectar()->prepare("SELECT idmarca,nombre,'X' as acciones FROM marca");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt = null;
	}

	static public function mdlRegistrarMarca($nombre)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO marca(nombre) VALUES (:nombre)");

		$stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);

		if ($stmt->execute()) {
			return "Se registró correctamente";
		} else {
			return "Error, no se pudo registrar";
		}

		$stmt = null;
	}

	static public function mdlEliminarmarca($idmarca)
	{

		$stmt = Conexion::conectar()->prepare("DELETE FROM marca WHERE idmarca = :idmarca");

		$stmt->bindParam(":idmarca", $idmarca, PDO::PARAM_INT);

		if ($stmt->execute()) {
			return "Se eliminó correctamente";
		} else {
			return "Error, no se pudo eliminar";
		}

		$stmt = null;
	}

	static public function mdlActualizarmarca($idmarca, $nombre)
	{

		$stmt = Conexion::conectar()->prepare("UPDATE marca
											   SET nombre = :nombre
											   WHERE idmarca = :idmarca");

		$stmt->bindParam(":idmarca", $idmarca, PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);

		if ($stmt->execute()) {
			return "Se actualizó correctamente";
		} else {
			return "Error, no se pudo actualizar";
		}

		$stmt = null;
	}
}
