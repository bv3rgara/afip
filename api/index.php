<?php 
include_once 'apiusuarios.php';

$api = new ApiUsuarios();
if(isset($_GET['id'])){
	$id = $_GET['id'];
	if(is_numeric($id)){
		$api->getUsuariosId($id);
	}else{
		$api->error('Los parametros deben ser numericos');
	}
}else{
	$api->getUsuarios();
}
?>