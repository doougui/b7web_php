<?php 
	class produtoController extends controller {
		public function index() {
			header('Location: '.BASE_URL);
		}

		public function abrir($id = NULL) {
			$dados = array();
			$a = new Anuncios();

			if (empty($id)) {
				header('Location: '.BASE_URL);
				exit;
			}

			$info = $a -> getAnuncio($id);
			$dados['info'] = $info;

			$this -> loadTemplate('produto', $dados);
		}
	}