<?php 
	class anunciosController extends controller {
		public function index() {
			$dados = array();

			if (!isset($_SESSION['cLogin']) || empty($_SESSION['cLogin'])) {
				header('Location: '.BASE_URL);
				exit;
			}

			$a = new Anuncios();
			$anuncios = $a -> getMeusAnuncios();

			$dados['anuncios'] = $anuncios;

			$this -> loadTemplate('anuncios', $dados);
		}

		public function adicionar() {
			$dados = array();
			$dados['msg'] = '';

			if (!isset($_SESSION['cLogin']) || empty($_SESSION['cLogin'])) {
				header('Location: '.BASE_URL);
				exit;
			}

			$a = new Anuncios();
			$c = new Categorias();

			if (isset($_POST['titulo']) && isset($_POST['categoria']) && isset($_POST['valor']) && 
					isset($_POST['descricao']) && isset($_POST['estado'])) 
			{
				$titulo = addslashes($_POST['titulo']);
				$categoria = addslashes($_POST['categoria']);
				$valor = addslashes($_POST['valor']);
				$descricao = addslashes($_POST['descricao']);
				$estado = addslashes($_POST['estado']);

				if (!empty($_POST['titulo']) && !empty($_POST['categoria']) && !empty($_POST['valor']) && 
						!empty($_POST['descricao']) && !empty($_POST['estado']))
				{
					if ($a -> addAnuncio($titulo, $categoria, $valor, $descricao, $estado)) {
						$dados['msg'] = 
						'<div class="alert alert-success alert-dismissible" role="alert"> 
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<p>Produto adicionado com sucesso!</p>
						</div>';
					} else {
						$dados['msg'] =
						'<div class="alert alert-danger alert-dismissible" role="alert"> 
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<p>O produto não pôde ser adicionado!</p>
						</div>';
					}
				} else {
					$dados['msg'] =
					'<div class="alert alert-warning alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<p>Todos os campos devem estar preenchidos.</p>
					</div>';
				}
			}

			$dados['cats'] = $c -> getLista();

			$this -> loadTemplate('adicionar', $dados);
		}

		public function editar($id = NULL) {
			$dados = array();
			$dados['msg'] = '';

			if (!isset($_SESSION['cLogin']) || empty($_SESSION['cLogin']) || empty($id)) {
				header('Location: '.BASE_URL.'anuncios');
				exit;
			}

			$a = new Anuncios();
			$c = new Categorias();

			if (isset($_POST['titulo']) && isset($_POST['categoria']) && isset($_POST['valor']) && 
					isset($_POST['descricao']) && isset($_POST['estado'])) 
			{
				$titulo = addslashes($_POST['titulo']);
				$categoria = addslashes($_POST['categoria']);
				$valor = addslashes($_POST['valor']);
				$descricao = addslashes($_POST['descricao']);
				$estado = addslashes($_POST['estado']);

				if (!empty($_POST['titulo']) && !empty($_POST['categoria']) && !empty($_POST['valor']) && 
					!empty($_POST['descricao']) && !empty($_POST['estado']))
				{
					if (isset($_FILES['fotos']) && !empty($_FILES['fotos'])) {
						$fotos = $_FILES['fotos'];
					} else {
						$fotos = array();
					}

					if ($a -> editAnuncio($titulo, $categoria, $valor, $descricao, $estado, $fotos, $id)) {
						$dados['msg'] = 
						'<div class="alert alert-success alert-dismissible" role="alert"> 
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<p>Produto editado com sucesso!</p>
						</div>';
					} else {
						$dados['msg'] = 
						'<div class="alert alert-danger alert-dismissible" role="alert"> 
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<p>O produto não pôde ser editado!</p>
						</div>';
					}
				} else {
					$dados['msg'] = 
					'<div class="alert alert-warning alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<p>Todos os campos devem estar preenchidos.</p>
					</div>';
				}
			}

			$dados['info'] = $a -> getAnuncio($id);
			$dados['cats'] = $c -> getLista();

			$this -> loadTemplate('editar', $dados);
		}

		public function excluir($id = NULL) {
			if (!isset($_SESSION['cLogin']) || empty($_SESSION['cLogin'])) {
				header('Location: '.BASE_URL);
				exit;
			}

			$a = new Anuncios();
			$a -> excluirAnuncio($id);

			header('Location: '.BASE_URL.'anuncios');
		}

		public function excluirfoto($id = NULL) {
			if (!isset($_SESSION['cLogin']) || empty($_SESSION['cLogin']) || empty($id)) {
				header('Location: '.BASE_URL);
				exit;
			}

			$a = new Anuncios();
			$id_anuncio = $a -> excluirFoto($id);

			header('Location: '.BASE_URL.'anuncios/editar/'.$id_anuncio);
		}
	}