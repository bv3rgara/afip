<?php
include_once 'query.php';

class ApiUsuarios{
	function getUsuarios(){
		$usuario = new ConsultaDB();
		$usuarios = array();
		$usuarios["items"] = array();
		$res = $usuario->obtenerQuery();
		if($res->rowCount()){
			while($row = $res->fetch(PDO::FETCH_ASSOC)){
				$item = array(
					'id_usuario' => $row['id_usuario'],
					'doc' => $row['doc'],
					'apellido' => $row['apellido'],
					'nombre' => $row['nombre'],
					'direccion' => $row['direccion'],
					'usuario' => $row['usuario'],
					'categoria' => $row['categoria'],
					'vence' => $row['vence'],
					'pass' => $row['pass'],
				);
				array_push($usuarios['items'], $item);
			}
			echo json_encode($usuarios);
		}else{
			echo json_encode(array('mensaje' => 'No existen usuarios'));
		}
	}
}
?>