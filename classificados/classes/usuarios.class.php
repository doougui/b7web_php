<?php 
	class Usuarios {
		public function getTotalUsuarios() {
			global $pdo;

			$sql = "SELECT COUNT(*) as c FROM usuarios";
			$sql = $pdo -> query($sql);

			$row = $sql -> fetch();

			return $row['c'];
		}

		public function cadastrar($nome, $email, $senha, $telefone) {
			global $pdo;
			$sql = "SELECT id FROM usuarios WHERE email = :email";
			$sql = $pdo -> prepare($sql);
			$sql -> bindValue(":email", $email);
			$sql -> execute();

			if ($sql -> rowCount() == 0) {
				$sql = "INSERT INTO usuarios SET 
								nome = :nome, 
								email = :email, 
								senha = :senha, 
								telefone = :telefone";
				$sql = $pdo -> prepare($sql);
				$sql -> bindValue(":nome", $nome);
				$sql -> bindValue(":email", $email);
				$sql -> bindValue(":senha", md5($senha));
				$sql -> bindValue(":telefone", $telefone);
				$sql -> execute();

				return true;
			} else {
				return false;
			}
		}

		public function login($email, $senha) {
			global $pdo;

			$sql = "SELECT id FROM usuarios WHERE email = :email AND senha = :senha";
			$sql = $pdo -> prepare($sql);
			$sql -> bindValue(":email", $email);
			$sql -> bindValue(":senha", md5($senha));
			$sql -> execute();

			if ($sql -> rowCount() > 0) {
				$dado = $sql -> fetch();
				$_SESSION['cLogin'] = $dado['id'];

				return true;
			} else {
				return false;
			}
		}

		public function getDados($id) {
			global $pdo;
			
			$sql = "SELECT * FROM usuarios WHERE id = :id";
			$sql = $pdo -> prepare($sql);
			$sql -> bindValue(":id", $id);
			$sql -> execute();

			if ($sql -> rowCount() > 0) {
				$dados = $sql -> fetch();

				return $dados;
			} else {
				return false;
			}
		}
	}