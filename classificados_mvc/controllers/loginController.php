<?php 
	class loginController extends controller {
		public function index() {
			unset($_SESSION['cLogin']);

			$dados = array();
			$dados['msg'] = '';

			$u = new Usuarios();

			if (isset($_POST['email']) && isset($_POST['senha'])) {
				$email = addslashes($_POST['email']);
				$senha = addslashes($_POST['senha']);

				if (!empty($_POST['email']) && !empty($_POST['senha'])) {
					if ($u -> login($email, $senha)) {
						header('Location: '.BASE_URL);
					} else {
						$dados['msg'] = 
						'<div class="alert alert-warning alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<p>Usuário e/ou senha incorretos.</p>
						</div>';
					}
				} else {
					$dados['msg'] =
					'<div class="alert alert-danger alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<p>Preencha todos os campos para continuar.</p>
					</div>';
				}
			}

			$this -> loadTemplate('login', $dados);
		}

		public function sair() {
			unset($_SESSION['cLogin']);
			header('Location: '.BASE_URL.'login');
		}
	}