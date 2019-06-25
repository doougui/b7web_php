<div class="container-fluid">

	<div class="row">
		<div class="col-sm-6">
			<div class="carousel slide" data-ride="carousel" id="meu-carousel">
				<div class="carousel-inner" role="listbox">
					<?php foreach ($info['fotos'] as $chave => $foto): ?>
						<div class="item <?= ($chave == '0') ? 'active' : '' ?>">
							<img src="<?= BASE_URL ?>assets/images/anuncios/<?= $foto['url'] ?>">
						</div>
					<?php endforeach; ?>
				</div>
				<a href="#meu-carousel" class="left carousel-control" role="button" data-slide="prev">
					<span class='glyphicon glyphicon-chevron-left'></span>
				</a>
				<a href="#meu-carousel" class="right carousel-control" role="button" data-slide="next">
					<span class='glyphicon glyphicon-chevron-right'></span>
				</a>
			</div>
		</div>

		<div class="col-sm-6">
			<h1><?= utf8_encode($info['titulo']) ?></h1>
			<h4><?= utf8_encode($info['categoria']) ?></h4>
			<p><?= nl2br(utf8_encode($info['descricao'])) ?></p>
			<br>
			<h3>R$ <?= number_format($info['valor'], 2); ?></h3>
			<h4>Telefone: <?= utf8_encode($info['telefone']) ?></h4>
		</div>
	</div>
</div>