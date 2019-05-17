<?php

class Usuario {

	private function conectarAoBanco() {
		$dsn = "mysql:dbname=rede_social;host=127.0.0.1";
		$dbuser = "root";
		$dbpass = "";
		
		try {
			global $pdo;
			$pdo = new PDO($dsn, $dbuser, $dbpass);
		} catch (PDOException $e) {
			echo "Erro: ".$e -> getMessage();
		}
	}

	public function pegarDados($id) {
		$this -> conectarAoBanco();
		global $pdo;

		$sql = "SELECT * FROM usuarios WHERE id = $id";
		$sql = $pdo -> query($sql);

		if ($sql -> rowCount() > 0) {
			$dado = $sql -> fetch();
			echo "O usuário ".$id." é ".$dado['nome'];	
		} else {
			echo "O usuário não existe.";
		}
	}
}

$user = new Usuario();
$user -> pegarDados(2);
