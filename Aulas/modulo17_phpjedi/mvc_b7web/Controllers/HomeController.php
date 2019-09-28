<?php
	namespace Controllers;

	use \Core\Controller;
	use \Models\Usuarios;

	class HomeController extends Controller {

		public function index() {
			$dados = array();

			// $usuarios = new \Models\Usuarios(); -> Também pode ser utilizado, ao invés do use (linha 5).
			$usuarios = new Usuarios();
			$dados['lista'] = $usuarios -> getAll();
			
			$this -> loadTemplate('home', $dados);
		}

	}