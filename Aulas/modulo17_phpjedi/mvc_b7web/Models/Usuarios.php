<?php 
	namespace Models;

	use \Core\Model;

	class Usuarios extends Model {
		public function getAll() {
			$usuarios = array();

			$sql = "SELECT * FROM usuarios";
			$sql = $this -> db -> query($sql);

			if ($sql -> rowCount() > 0) {
				$usuarios = $sql -> fetchAll();
			}

			return $usuarios;
		}
	}