<?php

require_once "conexion.php";

class ModeloTeclado
{

	static public function mdlMostrarTeclado()
	{

		$stmt = Conexion::conectar()->prepare("SELECT idteclado,numero_inventario,tipo_conector,idmarca,modelo,fecha_adquisicion,precio,estado,'X' as acciones FROM teclado");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt = null;
	}

	static public function mdlRegistrarTeclado($numero_inventario, $tipo_conector, $idmarca, $modelo, $fecha_adquisicion, $precio,$estado)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO teclado(numero_inventario,tipo_conector,idmarca,modelo,fecha_adquisicion,precio,estado) VALUES (:numero_inventario,:tipo_conector,:idmarca,:modelo,:fecha_adquisicion,:precio,:estado)");

		$stmt->bindParam(":numero_inventario", $numero_inventario, PDO::PARAM_INT);
		$stmt->bindParam(":tipo_conector", $tipo_conector, PDO::PARAM_STR);
		$stmt->bindParam(":idmarca", $idmarca, PDO::PARAM_INT);
		$stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
		$stmt->bindParam(":fecha_adquisicion", $fecha_adquisicion, PDO::PARAM_STR);
		$stmt->bindParam(":precio", $precio, PDO::PARAM_STR);
		$stmt->bindParam(":estado", $estado, PDO::PARAM_INT);


		if ($stmt->execute()) {
			return "Se registró correctamente";
		} else {
			return "Error, no se pudo registrar";
		}

		$stmt = null;
	}

	static public function mdlEliminarTeclado($idteclado)
	{

		$stmt = Conexion::conectar()->prepare("DELETE FROM teclado WHERE idteclado = :idteclado");

		$stmt->bindParam(":idteclado", $idteclado, PDO::PARAM_INT);

		if ($stmt->execute()) {
			return "Se eliminó correctamente";
		} else {
			return "Error, no se pudo eliminar";
		}

		$stmt = null;
	}

	static public function mdlActualizarTeclado($idteclado, $numero_inventario, $tipo_conector, $idmarca, $modelo, $fecha_adquisicion, $precio,$estado)
	{

		$stmt = Conexion::conectar()->prepare("UPDATE teclado
											   SET numero_inventario = :numero_inventario,
											   	   tipo_conector = :tipo_conector,
													  idmarca = :idmarca,
													  modelo = :modelo,
													  fecha_adquisicion = :fecha_adquisicion,
													  precio = :precio,
													  estado = :estado
											   WHERE idteclado = :idteclado");

		$stmt->bindParam(":idteclado", $idteclado, PDO::PARAM_INT);
		$stmt->bindParam(":numero_inventario", $numero_inventario, PDO::PARAM_INT);
		$stmt->bindParam(":tipo_conector", $tipo_conector, PDO::PARAM_STR);
		$stmt->bindParam(":idmarca", $idmarca, PDO::PARAM_INT);
		$stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
		$stmt->bindParam(":fecha_adquisicion", $fecha_adquisicion, PDO::PARAM_STR);
		$stmt->bindParam(":precio", $precio, PDO::PARAM_STR);
		$stmt->bindParam(":estado", $estado, PDO::PARAM_INT);

		if ($stmt->execute()) {
			return "Se actualizó correctamente";
		} else {
			return "Error, no se pudo actualizar";
		}

		$stmt = null;
	}
}
