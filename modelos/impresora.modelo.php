<?php

require_once "conexion.php";

class ModeloImpresora
{

	static public function mdlMostrarImpresora()
	{

		$stmt = Conexion::conectar()->prepare("SELECT idimpresora,numero_inventario,modelo,marca,numero_serie,velocidad,fecha_adquisicion,estado,'X' as acciones FROM impresora");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt = null;
	}

	static public function mdlRegistrarImpresora($numero_inventario, $modelo, $marca, $numero_serie, $velocidad, $fecha_adquisicion, $estado)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO impresora(numero_inventario,modelo,marca,numero_serie,velocidad,estado,fecha_adquisicion) VALUES (:numero_inventario,:modelo,:marca,:numero_serie,:velocidad,:estado,:fecha_adquisicion)");

		$stmt->bindParam(":numero_inventario", $numero_inventario, PDO::PARAM_INT);
		$stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
		$stmt->bindParam(":marca", $marca, PDO::PARAM_STR);
		$stmt->bindParam(":numero_serie", $numero_serie, PDO::PARAM_STR);
		$stmt->bindParam(":velocidad", $velocidad, PDO::PARAM_STR);
		$stmt->bindParam(":fecha_adquisicion", $fecha_adquisicion, PDO::PARAM_STR);
		$stmt->bindParam(":estado", $estado, PDO::PARAM_INT);



		if ($stmt->execute()) {
			return "Se registró correctamente";
		} else {
			return "Error, no se pudo registrar";
		}

		$stmt = null;
	}

	static public function mdlEliminarImpresora($idimpresora)
	{

		$stmt = Conexion::conectar()->prepare("DELETE FROM impresora WHERE idimpresora = :idimpresora");

		$stmt->bindParam(":idimpresora", $idimpresora, PDO::PARAM_INT);

		if ($stmt->execute()) {
			return "Se eliminó correctamente";
		} else {
			return "Error, no se pudo eliminar";
		}

		$stmt = null;
	}

	static public function mdlActualizarImpresora($idimpresora, $numero_inventario, $modelo, $marca, $numero_serie, $velocidad, $fecha_adquisicion, $estado)
	{

		$stmt = Conexion::conectar()->prepare("UPDATE impresora
											   SET numero_inventario = :numero_inventario,
											   	   modelo = :modelo,
													  marca = :marca,
													  numero_serie = :numero_serie,
													  velocidad = :velocidad,
													  fecha_adquisicion = :fecha_adquisicion,
													  estado = :estado
											   WHERE idimpresora = :idimpresora");

		$stmt->bindParam(":idimpresora", $idimpresora, PDO::PARAM_INT);
		$stmt->bindParam(":numero_inventario", $numero_inventario, PDO::PARAM_INT);
		$stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
		$stmt->bindParam(":marca", $marca, PDO::PARAM_STR);
		$stmt->bindParam(":numero_serie", $numero_serie, PDO::PARAM_STR);
		$stmt->bindParam(":velocidad", $velocidad, PDO::PARAM_STR);
		$stmt->bindParam(":fecha_adquisicion", $fecha_adquisicion, PDO::PARAM_STR);
		$stmt->bindParam(":estado", $estado, PDO::PARAM_INT);


		if ($stmt->execute()) {
			return "Se actualizó correctamente";
		} else {
			return "Error, no se pudo actualizar";
		}

		$stmt = null;
	}
}
