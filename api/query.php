<?php
include_once 'conex.php';

class ConsultaDB extends DB{
	function obtenerQuery(){
		$query = $this->connect()->query('SELECT * FROM afip.usuarios');
		return $query;
	}
}
?>