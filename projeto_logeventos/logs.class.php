<?php 

class Logs {

	private $pdo;

	public function __construct() {
		try {
			$this -> pdo = new PDO("mysql:dbname=projeto_logeventos;host=127.0.0.1", "root", "");
		} catch (PDOException $e) {
			echo "Error: ".$e -> getMessage();
		}
	}

	public function registerLog($action) {
		$ip = $_SERVER['REMOTE_ADDR'];
		$sql = "INSERT INTO historico (ip, data_acao, acao) VALUES (:ip, NOW(), :action)";
		$sql = $this -> pdo -> prepare($sql);
		$sql -> bindValue(":ip", $ip);
		$sql -> bindValue(":action", utf8_decode($action));
		$sql -> execute();
	}

}