<?php 
	class Modulos extends model {
		public function getList() {
			$array = array();

			$sql = "SELECT * FROM modulo";
			$sql = $this -> db -> query($sql);

			if ($sql -> rowCount() > 0) {
				$array = $sql -> fetchAll();
			}

			return $array;
		}
	}