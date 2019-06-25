<div class="container">
	<h1>Meus Anúncios</h1>

	<a href="<?= BASE_URL ?>anuncios/adicionar" class="btn btn-default">Adicionar anúncio</a>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Foto</th>
				<th>Título</th>
				<th>Valor</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
		<?php 
			foreach ($anuncios as $anuncio): ?>
				<tr>
					<td>
						<?php 
							if (!empty($anuncio['url'])) { ?>
								<img src="<?= BASE_URL ?>assets/images/anuncios/<?= $anuncio['url']; ?>" height="50" alt="Imagem do produto" border="0">
							<?php 
							} else { ?>
								<img src="<?= BASE_URL ?>assets/images/anuncios/default.png" height="50" alt="Imagem do produto">
							<?php 
							}
						?>
					</td>
					<td><a href="<?= BASE_URL ?>produto/abrir/<?= $anuncio['id'] ?>"><?= $anuncio['titulo']; ?></a></td>
					<td>R$ <?= number_format($anuncio['valor'], 2); ?></td>
					<td>
						<a href="<?= BASE_URL ?>anuncios/editar/<?= $anuncio['id']; ?>" class="btn btn-default">Editar</a>
						<a href="<?= BASE_URL ?>anuncios/excluir/<?= $anuncio['id']; ?>" class="btn btn-danger">Excluir</a>
					</td>
				</tr>
			<?php endforeach;
		?>
		</tbody>
	</table>
</div>