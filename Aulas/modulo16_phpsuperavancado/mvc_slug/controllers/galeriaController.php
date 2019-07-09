<?php 
	class galeriaController extends controller {
		public function index() {
			$dados = array();

			$a = new Albuns();
			$albuns = $a -> getAlbuns();

			$dados['albuns'] = $albuns;

			$this -> loadTemplate('galeria', $dados);
		}

		public function abrir($slug) {
			$dados = array();

			$a = new Albuns();
			$album = $a -> getAlbum($slug);

			$dados['album'] = $album;

			$this -> loadTemplate('album', $dados);
		}
	}
