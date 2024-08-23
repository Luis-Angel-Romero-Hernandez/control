<?php

require_once "conexion.php";

class ModeloAreas
{

	static public function mdlMostrarAreas()
	{

		$stmt = Conexion::conectar()->prepare("SELECT idarea,nombre,'X' as acciones FROM area");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt = null;
	}

	static public function mdlRegistrarAreas($nombre)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO area(nombre) VALUES (:nombre)");

		$stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);

		if ($stmt->execute()) {
			return "Se registró correctamente";
		} else {
			return "Error, no se pudo registrar";
		}

		$stmt = null;
	}

	static public function mdlEliminarArea($idarea)
	{

		$stmt = Conexion::conectar()->prepare("DELETE FROM area WHERE idarea = :idarea");

		$stmt->bindParam(":idarea", $idarea, PDO::PARAM_INT);

		if ($stmt->execute()) {
			return "Se eliminó correctamente";
		} else {
			return "Error, no se pudo eliminar";
		}

		$stmt = null;
	}

	static public function mdlActualizarArea($idarea, $nombre)
	{

		$stmt = Conexion::conectar()->prepare("UPDATE area
											   SET nombre = :nombre
											   WHERE idarea = :idarea");

		$stmt->bindParam(":idarea", $idarea, PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);

		if ($stmt->execute()) {
			return "Se actualizó correctamente";
		} else {
			return "Error, no se pudo actualizar";
		}

		$stmt = null;
	}
}
