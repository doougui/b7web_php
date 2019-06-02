<?php require 'pages/header.php'; ?>
<?php 
	require 'classes/anuncios.class.php';
	$a = new Anuncios();

	$total_anuncios = $a -> getTotalAnuncios();
	$total_usuarios = $u -> getTotalUsuarios();

	$p = 1;
	if (isset($_GET['p']) && !empty($_GET['p'])) {
		$p = addslashes($_GET['p']);
	}

	$por_pagina = 2;
	$total_paginas = ceil($total_anuncios / $por_pagina);

	$anuncios = $a -> getUltimosAnuncios($p, $por_pagina);
?>
	<div class="container-fluid">
		<div class="jumbotron">
			<h2>Hoje, temos <?= $total_anuncios ?> anúncios publicados no site.</h2>
			<p>E mais de <?= $total_usuarios ?> usuários cadastrados.</p>
		</div>

		<div class="row">
			<div class="col-sm-3">
				<h4>Pesquisa Avançada</h4>
			</div>

			<div class="col-sm-9">
				<h4>Últimos Anúncios</h4>
				<table class="table table-striped">
					<tbody>
						<?php foreach ($anuncios as $anuncio): ?>
							<tr>
								<td>
									<?php 
										if (!empty($anuncio['url'])) { ?>
											<img src="assets/images/anuncios/<?= $anuncio['url']; ?>" height="50" alt="Imagem do produto" border="0">
										<?php 
										} else { ?>
											<img src="assets/images/anuncios/default.png" height="50" alt="Imagem do produto">
										<?php 
										}
									?>
								</td>
								<td>
									<a href="produto.php?id=<?= $anuncio['id'] ?>"><?= $anuncio['titulo'] ?></a><br>
									<?= utf8_encode($anuncio['categoria']) ?>
								</td>
								<td>R$ <?= number_format($anuncio['valor'], 2); ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>

				<ul class="pagination">
					<?php for ($q = 1; $q <= $total_paginas; $q++): ?>
						<li class="<?= ($p == $q) ? 'active' : '' ?>"><a href="index.php?p=<?= $q ?>"><?= $q ?></a></li>
					<?php endfor; ?>
				</ul>
			</div>
		</div>
	</div>
<?php require 'pages/footer.php'; ?>