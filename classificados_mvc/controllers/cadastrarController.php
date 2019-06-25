<?php 
	class cadastrarController extends controller {
		public function index() {
			unset($_SESSION['cLogin']);
			
			$dados = array();
			$dados['msg'] = '';

			$u = new Usuarios();

			if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['telefone'])) {
				$nome = addslashes($_POST['nome']);
				$email = addslashes($_POST['email']);
				$senha = addslashes($_POST['senha']);
				$telefone = addslashes($_POST['telefone']);

				if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['telefone'])) {
					if ($u -> cadastrar($nome, $email, $senha, $telefone)) {
						$dados['msg'] = 
						'<div class="alert alert-success alert-dismissible" role="alert"> 
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<p>Usuário cadastrado com sucesso.</p>
							<a href="login.php" class="alert-link">Entre na sua conta.</a>
						</div>';
					} else {
						$dados['msg'] = 
						'<div class="alert alert-warning alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<p>Este usuário já existe.</p>
							<a href="login.php" class="alert-link">Faça o login agora.</a>
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

			$this -> loadTemplate('cadastrar', $dados);
		}
	}