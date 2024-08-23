<?php

require_once "conexion.php";

class ModeloMantenimiento
{

	static public function mdlMostrarMantenimiento()
	{

		$stmt = Conexion::conectar()->prepare("SELECT idmantenimiento,numero_inventario,fecha_mantenimiento,observaciones,estado,'X' as acciones FROM mantenimiento");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt = null;
	}

	static public function mdlRegistrarMantenimiento($numero_inventario, $fecha_mantenimiento, $observaciones,$estado)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO mantenimiento(numero_inventario,fecha_mantenimiento,observaciones,estado) VALUES (:numero_inventario,:fecha_mantenimiento,:observaciones,:estado)");

		$stmt->bindParam(":numero_inventario", $numero_inventario, PDO::PARAM_INT);
		$stmt->bindParam(":fecha_mantenimiento", $fecha_mantenimiento, PDO::PARAM_STR);
		$stmt->bindParam(":observaciones", $observaciones, PDO::PARAM_STR);
		$stmt->bindParam(":estado", $estado, PDO::PARAM_STR);


		if ($stmt->execute()) {
			return "Se registró correctamente";
		} else {
			return "Error, no se pudo registrar";
		}

		$stmt = null;
	}

	static public function mdlEliminarMantenimiento($idmantenimiento)
	{

		$stmt = Conexion::conectar()->prepare("DELETE FROM mantenimiento WHERE idmantenimiento = :idmantenimiento");

		$stmt->bindParam(":idmantenimiento", $idmantenimiento, PDO::PARAM_INT);

		if ($stmt->execute()) {
			return "Se eliminó correctamente";
		} else {
			return "Error, no se pudo eliminar";
		}

		$stmt = null;
	}

	static public function mdlActualizarMantenimiento( $idmantenimiento,$numero_inventario,$fecha_mantenimiento, $observaciones,$estado)
	{

		$stmt = Conexion::conectar()->prepare("UPDATE mantenimiento
											   SET numero_inventario = :numero_inventario,
													  fecha_mantenimiento = :fecha_mantenimiento,
													  observaciones = :observaciones,
													  estado = :estado
											   WHERE idmantenimiento = :idmantenimiento");
											   
		$stmt->bindParam(":idmantenimiento", $idmantenimiento, PDO::PARAM_INT);
		$stmt->bindParam(":numero_inventario", $numero_inventario, PDO::PARAM_INT);
		$stmt->bindParam(":fecha_mantenimiento", $fecha_mantenimiento, PDO::PARAM_STR);
		$stmt->bindParam(":observaciones", $observaciones, PDO::PARAM_STR);
		$stmt->bindParam(":estado", $estado, PDO::PARAM_STR);
		if ($stmt->execute()) {
			return "Se actualizó correctamente";
		} else {
			return "Error, no se pudo actualizar";
		}

		$stmt = null;
	}
}
