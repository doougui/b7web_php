<?php 
	class anunciosController extends controller {
		public function index() {
			$dados = array();

			if (!isset($_SESSION['cLogin']) || empty($_SESSION['cLogin'])) {
				header('Location: '.BASE_URL);
			}

			$this -> loadTemplate('anuncios', $dados);
		}
	}