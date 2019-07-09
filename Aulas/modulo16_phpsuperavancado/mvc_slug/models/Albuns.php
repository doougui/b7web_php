<?php 
	class Albuns extends model {
		public function getAlbuns() {
			$sql = "SELECT * FROM albuns";
			$sql = $this -> db -> query($sql);

			if ($sql -> rowCount() > 0) {
				return $sql -> fetchAll();
			} else {
				return array();
			}
		}

		public function getAlbum($slug) {
			$sql = "SELECT * FROM albuns WHERE slug = :slug";
			$sql = $this -> db -> prepare($sql);
			$sql -> bindValue(':slug', $slug);
			$sql -> execute();

			if ($sql -> rowCount() > 0) {
				return $sql -> fetch();
			} else {
				return array();
			}
		}
	}