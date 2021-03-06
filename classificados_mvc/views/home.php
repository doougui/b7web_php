	<div class="container-fluid">
		<div class="jumbotron">
			<h2>Hoje, temos <?= $total_anuncios ?> anúncios publicados no site.</h2>
			<p>E mais de <?= $total_usuarios ?> usuários cadastrados.</p>
		</div>

		<div class="row">
			<div class="col-sm-3">
				<h4>Pesquisa Avançada</h4>

				<form method="GET">
					<div class="form-group">
						<label for="categoria">Categoria</label>
						<select id="categoria" name="filtros[categoria]" class="form-control">
							<option></option>
							<?php foreach ($categorias as $cat): ?>
								<option value="<?= $cat['id'] ?>" <?= ($cat['id'] == $filtros['categoria']) ? 'selected="selected"' : '' ?>><?= utf8_encode($cat['nome']) ?></option>
							<?php endforeach; ?>
						</select>
					</div>

					<div class="form-group">
						<label for="preco">Preço</label>
						<select id="preco" name="filtros[preco]" class="form-control">
							<option></option>
							<option value="0-50" <?= ($filtros['preco'] == '0-50') ? 'selected="selected"' : '' ?>>R$ 0 - 50</option>
							<option value="51-100" <?= ($filtros['preco'] == '51-100') ? 'selected="selected"' : '' ?>>R$ 51 - 100</option>
							<option value="101-200" <?= ($filtros['preco'] == '101-200') ? 'selected="selected"' : '' ?>>R$ 101 - 200</option>
							<option value="201-500" <?= ($filtros['preco'] == '201-500') ? 'selected="selected"' : '' ?>>R$ 201 - 500</option>
							<option value="501-999999999" <?= ($filtros['preco'] == '501-999999999') ? 'selected="selected"' : '' ?>>R$ 501+</option>
						</select>
					</div>

					<div class="form-group">
						<label for="estado">Estado de conservação</label>
						<select id="estado" name="filtros[estado]" class="form-control">
							<option></option>
							<option value="1" <?= ($filtros['estado'] == '1') ? 'selected="selected"' : '' ?>>Ruim</option>
							<option value="2" <?= ($filtros['estado'] == '2') ? 'selected="selected"' : '' ?>>Bom</option>
							<option value="3" <?= ($filtros['estado'] == '3') ? 'selected="selected"' : '' ?>>Ótimo</option>
						</select>
					</div>

					<div class="form-group">
						<input type="submit" value="Filtrar" class="btn btn-info">
					</div>
				</form>
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
											<img src="<?= BASE_URL ?>assets/images/anuncios/<?= $anuncio['url']; ?>" height="50" alt="Imagem do produto" border="0">
										<?php 
										} else { ?>
											<img src="<?= BASE_URL ?>assets/images/anuncios/default.png" height="50" alt="Imagem do produto">
										<?php 
										}
									?>
								</td>
								<td>
									<a href="<?= BASE_URL ?>produto/abrir/<?= $anuncio['id'] ?>"><?= $anuncio['titulo'] ?></a><br>
									<?= utf8_encode($anuncio['categoria']) ?>
								</td>
								<td>R$ <?= number_format($anuncio['valor'], 2); ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>

				<ul class="pagination">
					<?php 
						for ($q = 1; $q <= $total_paginas; $q++): ?>
							<li class="<?= ($p == $q) ? 'active' : '' ?>"><a href="<?= BASE_URL ?>?<?php
								$w = $_GET;
								$w['p'] = $q;
								echo http_build_query($w);
							?>"><?= $q ?></a></li>
						<?php 
						endfor; 
						?>
				</ul>
			</div>
		</div>
	</div>