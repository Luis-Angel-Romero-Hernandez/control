<?php

require_once "conexion.php";

class ModeloTelefono
{

	static public function mdlMostrarTelefono()
	{

		$stmt = Conexion::conectar()->prepare("SELECT idtelefono,numero_inventario,marca,modelo,estado,'X' as acciones FROM telefono");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt = null;
	}

	static public function mdlRegistrarTelefono($numero_inventario, $marca, $modelo,$estado)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO telefono(numero_inventario,marca,modelo,estado) VALUES (:numero_inventario,,:marca,:modelo,:estado)");

		$stmt->bindParam(":numero_inventario", $numero_inventario, PDO::PARAM_INT);
		$stmt->bindParam(":marca", $marca, PDO::PARAM_INT);
		$stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
		$stmt->bindParam(":estado", $estado, PDO::PARAM_INT);


		if ($stmt->execute()) {
			return "Se registró correctamente";
		} else {
			return "Error, no se pudo registrar";
		}

		$stmt = null;
	}

	static public function mdlEliminarTelefono($idtelefono)
	{

		$stmt = Conexion::conectar()->prepare("DELETE FROM telefono WHERE idtelefono = :idtelefono");

		$stmt->bindParam(":idtelefono", $idtelefono, PDO::PARAM_INT);

		if ($stmt->execute()) {
			return "Se eliminó correctamente";
		} else {
			return "Error, no se pudo eliminar";
		}

		$stmt = null;
	}

	static public function mdlActualizarTelefono($idtelefono, $numero_inventario,  $marca, $modelo,$estado)
	{

		$stmt = Conexion::conectar()->prepare("UPDATE telefono
											   SET numero_inventario = :numero_inventario,
													  marca = :marca,
													  modelo = :modelo,
													  estado = :estado
											   WHERE idtelefono = :idtelefono");

		$stmt->bindParam(":idtelefono", $idtelefono, PDO::PARAM_INT);
		$stmt->bindParam(":numero_inventario", $numero_inventario, PDO::PARAM_INT);
		$stmt->bindParam(":marca", $marca, PDO::PARAM_INT);
		$stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
		$stmt->bindParam(":estado", $estado, PDO::PARAM_INT);

		if ($stmt->execute()) {
			return "Se actualizó correctamente";
		} else {
			return "Error, no se pudo actualizar";
		}

		$stmt = null;
	}
}
