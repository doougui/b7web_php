<?php 
	class Anuncios {
		public function getMeusAnuncios() {
			global $pdo;

			$array = array();
			$sql = "SELECT *, 
			(select anuncios_imagens.url from anuncios_imagens where anuncios_imagens.id_anuncio = anuncios.id limit 1) 
			as url FROM anuncios WHERE id_usuario = :id_usuario";
			$sql = $pdo -> prepare($sql);
			$sql -> bindValue(":id_usuario", $_SESSION['cLogin']);
			$sql -> execute();

			if ($sql -> rowCount() > 0) {
				$array = $sql -> fetchAll();
			}

			return $array;
		}

		public function addAnuncio($titulo, $categoria, $valor, $descricao, $estado) {
			global $pdo;

			$sql = "INSERT INTO anuncios SET 
			titulo = :titulo, id_usuario = :id_usuario, id_categoria = :id_categoria, descricao = :descricao, valor = :valor, estado = :estado";
			$sql = $pdo -> prepare($sql);
			$sql -> bindValue(":id_usuario", $_SESSION['cLogin']);
			$sql -> bindValue(":id_categoria", $categoria);
			$sql -> bindValue(":titulo", $titulo);
			$sql -> bindValue(":descricao", $descricao);
			$sql -> bindValue(":valor", $valor);
			$sql -> bindValue(":estado", $estado);
			$sql -> execute();

			if ($sql -> rowCount() > 0) {
				return true;
			} else {
				return false;
			}
		}
	}