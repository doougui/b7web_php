<?php require 'pages/header.php'; ?>
<?php 
	if (!isset($_SESSION['cLogin']) || empty($_SESSION['cLogin'])) { ?>
		<script type="text/javascript">window.location.href = 'login.php';</script>
	<?php 
		exit;
	}
?>
	<div class="container">
		<h1>Meus Anúncios</h1>

		<a href="add-anuncio.php" class="btn btn-default">Adicionar anúncio</a>

		<table class="table table-striped">
			<thead>
				<tr>
					<th>Foto</th>
					<th>Título</th>
					<th>Valor</th>
					<th>Ações</th>
				</tr>
			</thead>
			<?php 
				require 'classes/anuncios.class.php';

				$a = new Anuncios();
				$anuncios = $a -> getMeusAnuncios();

				foreach ($anuncios as $anuncio): ?>
					<tr>
						<td><img src="assets/images/anuncios/<?= $anuncio['url']; ?>" alt="Imagem do produto" border="0"></td>
						<td><?= $anuncio['titulo']; ?></td>
						<td><?= number_format($anuncio['valor'], 2); ?></td>
						<td></td>
					</tr>
				<?php endforeach;
			?>
		</table>
	</div>
<?php require 'pages/footer.php'; ?>