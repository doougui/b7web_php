<?php

class Contato {
	private $pdo;

	public function __construct() {
		try {
			$this -> pdo = new PDO("mysql:dbname=crud_oo;host=127.0.0.1", "root", "");
		} catch (PDOException $e) {
			echo "Erro: ".$e -> getMessage();
		}
	}

	public function adicionar($email, $nome = '') {
		$emailExistente = $this -> existeEmail($email);
		if (count($emailExistente) == 0) {
			$sql = "INSERT INTO contatos (nome, email) VALUES (:nome, :email)";
			$sql = $this -> pdo -> prepare($sql);
			$sql -> bindValue(":nome", $nome);
			$sql -> bindValue(":email", $email);
			$sql -> execute();

			return true;
		} else {
			return false;
		}
	}

	public function getInfo($id) {
		$sql = "SELECT * FROM contatos WHERE id = :id";
		$sql = $this -> pdo -> prepare($sql);
		$sql -> bindValue(":id", $id);
		$sql -> execute();

		if ($sql -> rowCount() > 0) {
			return $sql -> fetch();
		} else {
			return array();
		}
	}

	public function getAll() {
		$sql = "SELECT * FROM contatos";
		$sql = $this -> pdo -> query($sql);
		$sql -> execute();

		if ($sql -> rowCount() > 0) {
			return $sql -> fetchAll();
		} else {
			return array();
		}
	}

	public function editar($nome, $email, $id) {
		$emailExistente = $this -> existeEmail($email);
		if (count($emailExistente) > 0 && $emailExistente['id'] != $id) {
			return false;
		} else {
			$sql = "UPDATE contatos SET nome = :nome, email = :email WHERE id = :id";
			$sql = $this -> pdo -> prepare($sql);
			$sql -> bindValue(":nome", $nome);
			$sql -> bindValue(":email", $email);
			$sql -> bindValue(":id", $id);
			$sql -> execute();

			return true;
		}
	}

	public function excluirPeloId($id) {
		$sql = "DELETE FROM contatos WHERE id = :id";
		$sql = $this -> pdo -> prepare($sql);
		$sql -> bindValue(":id", $id);
		$sql -> execute();
	}

	public function excluirPeloEmail($email) {
		$sql = "DELETE FROM contatos WHERE email = :email";
		$sql = $this -> pdo -> prepare($sql);
		$sql -> bindValue(":email", $email);
		$sql -> execute();
	}

	private function existeEmail($email) {
		$sql = "SELECT * FROM contatos WHERE email = :email";
		$sql = $this -> pdo -> prepare($sql);
		$sql -> bindValue(":email", $email);
		$sql -> execute();

		if ($sql -> rowCount() > 0) {
			$array = $sql -> fetch();
		} else {
			$array = array();
		}

		return $array;
	}
}

?>