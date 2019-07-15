<?php 
	class Contatos extends model {
		public function getAll() {
			$array = array();
			
			$sql = "SELECT * FROM contatos";
			$sql = $this -> db -> query($sql);

			if ($sql -> rowCount() > 0) {
				$array = $sql -> fetchAll();
			}

			return $array;		
		}

		public function getInfo($id) {
			$data = array();

			$sql = "SELECT * FROM contatos WHERE id = :id";
			$sql = $this -> db -> prepare($sql);
			$sql -> bindValue(':id', $id);
			$sql -> execute();

			if ($sql -> rowCount() > 0) {
				$data = $sql -> fetch();
			}

			return $data;
		}

		public function add($nome, $email) {
			$emailExists = $this -> emailExists($email);

			if (count($emailExists) == 0) {
				$sql = "INSERT INTO contatos (nome, email) VALUES (:nome, :email)";
				$sql = $this -> db -> prepare($sql);
				$sql -> bindValue(':nome', $nome);
				$sql -> bindValue(':email', $email);
				$sql -> execute();

				return true;
			} else {
				return false;
			}
		}

		public function edit($id, $nome, $email) {
			$emailExists = $this -> emailExists($email);

			if (count($emailExists) > 0 && $emailExists['id'] != $id) {
				return false;
			} else {
				$sql = "UPDATE contatos SET nome = :nome, email = :email WHERE id = :id";
				$sql = $this -> db -> prepare($sql);
				$sql -> bindValue(':nome', $nome);
				$sql -> bindValue(':email', $email);
				$sql -> bindValue(':id', $id);
				$sql -> execute();

				return true;
			}
		}

		public function del($id) {
			$sql = "DELETE FROM contatos WHERE id = :id";
			$sql = $this -> db -> prepare($sql);
			$sql -> bindValue(':id', $id);
			$sql -> execute();
		}

		private function emailExists($email) {
			$array = array();

			$sql = "SELECT * FROM contatos WHERE email = :email";
			$sql = $this -> db -> prepare($sql);
			$sql -> bindValue(':email', $email);
			$sql -> execute();

			if ($sql -> rowCount() > 0) {
				$array = $sql -> fetch();
			}

			return $array;
		}
	}