<?php

require_once "conexion.php";

class ModeloInventario
{

	static public function mdlMostrarInventario()
	{

		$stmt = Conexion::conectar()->prepare("SELECT numero_inventario,fecha,idusuario,idteclado,idmouse,idmonitor,idequipo,idimpresora,idtelefono,'X' as acciones FROM inventario");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt = null;
	}

	static public function mdlRegistrarInventario( $fecha, $idusuario, $idteclado, $idmouse, $idmonitor, $idequipo, $idimpresora, $idtelefono)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO inventario(fecha,idusuario,idteclado,idmouse,idmonitor,idequipo,idimpresora,idtelefono) VALUES (:fecha,:idusuario,:idteclado,:idmouse,:idmonitor,:idequipo,:idimpresora,:idtelefono)");

		$stmt->bindParam(":fecha", $fecha, PDO::PARAM_STR);
		$stmt->bindParam(":idusuario", $idusuario, PDO::PARAM_INT);
		$stmt->bindParam(":idteclado", $idteclado, PDO::PARAM_INT);
		$stmt->bindParam(":idmouse", $idmouse, PDO::PARAM_INT);
		$stmt->bindParam(":idmonitor", $idmonitor, PDO::PARAM_INT);
		$stmt->bindParam(":idequipo", $idequipo, PDO::PARAM_INT);
		$stmt->bindParam(":idimpresora", $idimpresora, PDO::PARAM_INT);
		$stmt->bindParam(":idtelefono", $idtelefono, PDO::PARAM_INT);

		if ($stmt->execute()) {
			return "Se registró correctamente";
		} else {
			return "Error, no se pudo registrar";
		}

		$stmt = null;
	}

	static public function mdlEliminarInventario($numero_inventario)
	{

		$stmt = Conexion::conectar()->prepare("DELETE FROM inventario WHERE numero_inventario = :numero_inventario");

		$stmt->bindParam(":numero_inventario", $numero_inventario, PDO::PARAM_INT);

		if ($stmt->execute()) {
			return "Se eliminó correctamente";
		} else {
			return "Error, no se pudo eliminar";
		}

		$stmt = null;
	}

	static public function mdlActualizarInventario( $numero_inventario,$fecha, $idusuario, $idteclado, $idmouse, $idmonitor, $idequipo, $idimpresora, $idtelefono)
	{

		$stmt = Conexion::conectar()->prepare("UPDATE inventario
											   SET fecha = :fecha,
													  idusuario = :idusuario,
													  idteclado = :idteclado,
													  idmouse = :idmouse,
													  idmonitor = :idmonitor,
													  idequipo = :idequipo,
													  idimpresora = :idimpresora,
													  idtelefono = :idtelefono
											   WHERE numero_inventario = :numero_inventario");

		$stmt->bindParam(":numero_inventario", $numero_inventario, PDO::PARAM_INT);
		$stmt->bindParam(":fecha", $fecha, PDO::PARAM_STR);
		$stmt->bindParam(":idusuario", $idusuario, PDO::PARAM_INT);
		$stmt->bindParam(":idteclado", $idteclado, PDO::PARAM_INT);
		$stmt->bindParam(":idmouse", $idmouse, PDO::PARAM_INT);
		$stmt->bindParam(":idmonitor", $idmonitor, PDO::PARAM_INT);
		$stmt->bindParam(":idequipo", $idequipo, PDO::PARAM_INT);
		$stmt->bindParam(":idimpresora", $idimpresora, PDO::PARAM_INT);
		$stmt->bindParam(":idtelefono", $idtelefono, PDO::PARAM_INT);

		if ($stmt->execute()) {
			return "Se actualizó correctamente";
		} else {
			return "Error, no se pudo actualizar";
		}

		$stmt = null;
	}
}
