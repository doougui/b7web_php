<?php
	class homeController extends controller {

		public function index() {
			$dados = array();

			$usuarios = new Usuarios();
			$dados['lista'] = $usuarios -> getAll();
			
			$this -> loadTemplate('home', $dados);
		}

	}