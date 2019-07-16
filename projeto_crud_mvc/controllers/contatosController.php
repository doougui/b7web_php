<?php 
	class contatosController extends controller {
		public function index() {
			header('Location: '.BASE_URL.'add');
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

		public function edit($id) {
			$dados = array(
				'error' => ''
			);

			if (isset($_GET['error']) && !empty($_GET['error'])) {
				$dados['error'] = $_GET['error'];
			}

			if (!empty($id)) {
				$contatos = new Contatos();
				$dados['info'] = $contatos -> getInfo($id);

				if (empty($dados['info'])) {
					header('Location: '.BASE_URL);
				}

				$this -> loadTemplate('edit', $dados);
			} else {
				header('Location: '.BASE_URL);
			}
		}

		public function edit_save($id) {
			if (isset($_POST['email']) && !empty($_POST['email'])) {
				$nome = isset($_POST['nome']) ? addslashes($_POST['nome']) : NULL;
				$email = addslashes($_POST['email']);

				$contatos = new Contatos();
				if ($contatos -> edit($id, $nome, $email)) {
					header('Location: '.BASE_URL);
				} else {
					header('Location: '.BASE_URL.'contatos/edit/'.$id.'?error=exist');
				}
			} else {
				header('Location: '.BASE_URL.'contatos/edit');
			}
		}

		public function del($id = NULL) {
			if (isset($id) && !empty($id)) {
				$contatos = new Contatos();
				$contatos -> del($id);
			} 

			header('Location: '.BASE_URL);
		}
	}