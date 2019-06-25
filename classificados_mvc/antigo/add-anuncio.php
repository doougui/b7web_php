<?php require 'pages/header.php'; ?>
<?php 
	if (!isset($_SESSION['cLogin']) || empty($_SESSION['cLogin'])) { ?>
		<script type="text/javascript">window.location.href = 'login.php';</script>
	<?php 
		exit;
	}

	require 'classes/anuncios.class.php';
	$a = new Anuncios();

	if (isset($_POST['titulo']) && !empty($_POST['titulo']) &&
			isset($_POST['categoria']) && !empty($_POST['categoria']) &&
			isset($_POST['valor']) && !empty($_POST['valor']) &&
			isset($_POST['descricao']) && !empty($_POST['descricao']) &&
			isset($_POST['estado']) && !empty($_POST['estado'])) 
	{
		$titulo = addslashes($_POST['titulo']);
		$categoria = addslashes($_POST['categoria']);
		$valor = addslashes($_POST['valor']);
		$descricao = addslashes($_POST['descricao']);
		$estado = addslashes($_POST['estado']);

		if ($a -> addAnuncio($titulo, $categoria, $valor, $descricao, $estado)) { ?>
			<div class="container alert alert-success">
				<p>Produto adicionado com sucesso!</p>
			</div>
		<?php 
		} else { ?>
			<div class="container alert alert-danger">
				<p>O produto não pode ser adicionado!</p>
			</div>
		<?php 
		}
	}
?>
	<div class="container">
		<h1>Meus Anúncios - Adicionar Anúncio</h1>

		<form method="POST">

			<div class="form-group">
				<label for="categoria">Categoria</label>
				<select name="categoria" id="categoria" class="form-control">
					<?php 
						require 'classes/categorias.class.php';

						$c = new Categorias();
						$cats = $c -> getLista();

						foreach ($cats as $cat): ?>
							<option value="<?= $cat['id']; ?>"><?= utf8_encode($cat['nome']); ?></option>
						<?php endforeach;	
					?>
				</select>
			</div>

			<div class="form-group">
				<label for="titulo">Título</label>
				<input type="text" name="titulo" id="titulo" class="form-control">
			</div>

			<div class="form-group">
				<label for="valor">Valor</label>
				<input type="text" name="valor" id="valor" class="form-control">
			</div>

			<div class="form-group">
				<label for="descricao">Descrição</label>
				<textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<label for="estado">Estado de Conservação</label>
				<select name="estado" id="estado" class="form-control">
					<option value="1">Ruim</option>
					<option value="2">Bom</option>
					<option value="3">Ótimo</option>
				</select>
			</div>
			
			<input type="submit" value="Adicionar" class="btn btn-default">
		</form>
	</div>
<?php require 'pages/footer.php'; ?>