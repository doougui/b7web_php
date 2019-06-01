<?php 
	class Anuncios {
		public function getMeusAnuncios() {
			global $pdo;

			$array = array();
			$sql = "SELECT *, 
			(select anuncios_imagens.url from anuncios_imagens where anuncios_imagens.id_anuncio = anuncio.id limit 1) 
			as url FROM anuncios WHERE id_usuario = :id_usuario";
			$sql = $pdo -> prepare($sql);
			$sql -> bindValue(":id_usuario", $_SESSION['cLogin']);
			$sql -> execute();

			if ($sql -> rowCount() > 0) {
				$array = $sql -> fetchAll();
			}

			return $array;
		}
	}