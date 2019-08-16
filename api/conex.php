<?php
class DB{
	private $host;
	private $db;
	private $user;
	private $pass;
	private $charset;

	public function __construct(){
		$this->host = 'localhost';
		$this->db = 'afip';
		$this->user = 'admin';
		$this->pass = 'admin123';
		$this->charset = 'utf8_general_ci';
	}

	function connect (){
		try{
			$connection = "mysql:host".$this->host.";dbname=".$this->db;
			$options = [
				PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_EMULATE_PREPARES => false,
			];
			$pdo = new PDO($connection, $this->user, $this->pass, $options);
			return $pdo;
		}catch(PDOException $e){
			print_r('Error en la conexion'.$e->getMessage());
		}
	}
}
?>