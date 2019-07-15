<?php 
	class contatosController extends controller {
		public function index() {

		}

		public function add() {
			$dados = array(
				'error' => ''
			);

			if (isset($_GET['error']) && !empty($_GET['error'])) {
				$dados['error'] = $_GET['error'];
			}

			$this -> loadTemplate('add', $dados);
		}

		public function add_save() {
			if (isset($_POST['email']) && !empty($_POST['email'])) {
				$nome = isset($_POST['nome']) ? addslashes($_POST['nome']) : NULL;
				$email = addslashes($_POST['email']);

				$contatos = new Contatos();
				if ($contatos -> add($nome, $email)) {
					header('Location: '.BASE_URL);
				} else {
					header('Location: '.BASE_URL.'contatos/add?error=exist');
				}
			} else {
				header('Location: '.BASE_URL.'contatos/add');
			}
		}
	}