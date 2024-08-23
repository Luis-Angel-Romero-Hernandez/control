<?php

require_once "conexion.php";

class ModeloMonitor
{

	static public function mdlMostrarMonitor()
	{

		$stmt = Conexion::conectar()->prepare("SELECT idmonitor,numero_inventario,tipo_conector,idmarca,modelo,numero_serie,pulgadas,fecha_adquisicion,precio,estado,'X' as acciones FROM monitor");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt = null;
	}

	static public function mdlRegistrarMonitor( $numero_inventario, $tipo_conector, $idmarca, $modelo, $numero_serie, $pulgadas, $fecha_adquisicion, $precio,$estado)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO monitor(numero_inventario,tipo_conector,idmarca,modelo,numero_serie,pulgadas,fecha_adquisicion,precio,estado) VALUES (:numero_inventario,:tipo_conector,:idmarca,:modelo,:numero_serie,:pulgadas,:fecha_adquisicion,:precio,:estado)");

		$stmt->bindParam(":numero_inventario", $numero_inventario, PDO::PARAM_STR);
		$stmt->bindParam(":tipo_conector", $tipo_conector, PDO::PARAM_STR);
		$stmt->bindParam(":idmarca", $idmarca, PDO::PARAM_INT);
		$stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
		$stmt->bindParam(":numero_serie", $numero_serie, PDO::PARAM_STR);
		$stmt->bindParam(":pulgadas", $pulgadas, PDO::PARAM_STR);
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

	static public function mdlEliminarMonitor($idmonitor)
	{

		$stmt = Conexion::conectar()->prepare("DELETE FROM monitor WHERE idmonitor = :idmonitor");

		$stmt->bindParam(":idmonitor", $idmonitor, PDO::PARAM_INT);

		if ($stmt->execute()) {
			return "Se eliminó correctamente";
		} else {
			return "Error, no se pudo eliminar";
		}

		$stmt = null;
	}

	static public function mdlActualizarMonitor($idmonitor, $numero_inventario, $tipo_conector, $idmarca, $modelo, $numero_serie, $pulgadas, $fecha_adquisicion, $precio,$estado)
	{

		$stmt = Conexion::conectar()->prepare("UPDATE monitor
											   SET numero_inventario = :numero_inventario,
											   	   tipo_conector = :tipo_conector,
													  idmarca = :idmarca,
													  modelo = :modelo,
													  numero_serie = :numero_serie,
													  pulgadas = :pulgadas,
													  fecha_adquisicion = :fecha_adquisicion,
													  precio = :precio,
													  estado = :estado
											   WHERE idmonitor = :idmonitor");

		$stmt->bindParam(":idmonitor", $idmonitor, PDO::PARAM_INT);
		$stmt->bindParam(":numero_inventario", $numero_inventario, PDO::PARAM_STR);
		$stmt->bindParam(":tipo_conector", $tipo_conector, PDO::PARAM_STR);
		$stmt->bindParam(":idmarca", $idmarca, PDO::PARAM_INT);
		$stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
		$stmt->bindParam(":numero_serie", $numero_serie, PDO::PARAM_STR);
		$stmt->bindParam(":pulgadas", $pulgadas, PDO::PARAM_STR);
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
