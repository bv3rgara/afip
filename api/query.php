<?php
include_once 'conex.php';

class ConsultaDB extends DB{
	function obtenerQuery(){
		$query = $this->connect()->query('SELECT * FROM afip.usuarios');
		return $query;
	}

	function obtenerUnaQuery($id){
		$query = $this->connect()->prepare('SELECT * FROM afip.usuarios WHERE id_usuario= :id');
		$query->execute(['id' => $id]);
		return $query;
	}
}
?>