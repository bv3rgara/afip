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
			$this->printJSON($usuarios);
		}else{
			$this->error('No existen usuarios');
		}
	}

	function getUsuariosId($id){
		$usuario = new ConsultaDB();
		$usuarios = array();
		$usuarios["items"] = array();
		$res = $usuario->obtenerUnaQuery($id);
		if($res->rowCount() == 1){
			$row = $res->fetch();
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
			$this->printJSON($usuarios);
		}else{
			$this->error('No existen usuarios');
		}
	}

	function printJSON($array){
		echo '<code>'.json_encode($array).'</code>';
	}

	function error($mensaje){
		echo '<code>'.json_encode(array('mensaje' => $mensaje)).'</code>';
	}
}
?>