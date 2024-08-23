<?php

require_once "conexion.php";

class ModeloEquipos
{

	static public function mdlMostrarEquipos()
	{

		$stmt = Conexion::conectar()->prepare("SELECT idequipo,numero_inventario,numero_serie,marca,disco_duro,procesador,ram,idtipo_equipo,estado,'X' as acciones FROM equipo");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt = null;
	}

	static public function mdlRegistrarEquipos($numero_inventario, $numero_serie, $marca, $disco_duro, $procesador, $ram, $idtipo_equipo,$estado)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO equipo(numero_inventario,numero_serie,marca,disco_duro,procesador,ram,idtipo_equipo,estado) VALUES (:numero_inventario,:numero_serie,:marca,:disco_duro,:procesador,:ram,:idtipo_equipo,:estado)");

		$stmt->bindParam(":numero_inventario", $numero_inventario, PDO::PARAM_STR);
		$stmt->bindParam(":numero_serie", $numero_serie, PDO::PARAM_STR);
		$stmt->bindParam(":marca", $marca, PDO::PARAM_STR);
		$stmt->bindParam(":disco_duro", $disco_duro, PDO::PARAM_STR);
		$stmt->bindParam(":procesador", $procesador, PDO::PARAM_STR);
		$stmt->bindParam(":ram", $ram, PDO::PARAM_STR);
		$stmt->bindParam(":idtipo_equipo", $idtipo_equipo, PDO::PARAM_INT);
		$stmt->bindParam(":estado", $estado, PDO::PARAM_INT);


		if ($stmt->execute()) {
			return "Se registró correctamente";
		} else {
			return "Error, no se pudo registrar";
		}

		$stmt = null;
	}

	static public function mdlEliminarEquipo($idequipo)
	{

		$stmt = Conexion::conectar()->prepare("DELETE FROM equipo WHERE idequipo = :idequipo");

		$stmt->bindParam(":idequipo", $idequipo, PDO::PARAM_INT);

		if ($stmt->execute()) {
			return "Se eliminó correctamente";
		} else {
			return "Error, no se pudo eliminar";
		}

		$stmt = null;
	}

	static public function mdlActualizarEquipo($idequipo, $numero_inventario, $numero_serie, $marca, $disco_duro, $procesador, $ram, $idtipo_equipo,$estado)
	{

		$stmt = Conexion::conectar()->prepare("UPDATE equipo
											   SET numero_inventario = :numero_inventario,
											   	   numero_serie = :numero_serie,
													  marca = :marca,
													  disco_duro = :disco_duro,
													  procesador = :procesador,
													  ram = :ram,
													  idtipo_equipo = :idtipo_equipo,
													  estado = :estado
											   WHERE idequipo = :idequipo");

		$stmt->bindParam(":idequipo", $idequipo, PDO::PARAM_INT);
		$stmt->bindParam(":numero_inventario", $numero_inventario, PDO::PARAM_STR);
		$stmt->bindParam(":numero_serie", $numero_serie, PDO::PARAM_STR);
		$stmt->bindParam(":marca", $marca, PDO::PARAM_STR);
		$stmt->bindParam(":disco_duro", $disco_duro, PDO::PARAM_STR);
		$stmt->bindParam(":procesador", $procesador, PDO::PARAM_STR);
		$stmt->bindParam(":ram", $ram, PDO::PARAM_STR);
		$stmt->bindParam(":idtipo_equipo", $idtipo_equipo, PDO::PARAM_INT);
		$stmt->bindParam(":estado", $estado, PDO::PARAM_INT);

		if ($stmt->execute()) {
			return "Se actualizó correctamente";
		} else {
			return "Error, no se pudo actualizar";
		}

		$stmt = null;
	}
}
