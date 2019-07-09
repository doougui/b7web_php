<?php 
	class galeriaController extends controller {
		public function index() {
			$dados = array(
				'quantidade' => 129
			);

			$this -> loadTemplate('galeria', $dados);
		}

		public function abrir($id) {
			$dados = array(
				'quantidade' => $id
			);

			$this -> loadTemplate('galeria', $dados);
		}
	}
