<div class="container">
	<?= $msg ?>

	<h1>Meus Anúncios - Editar Anúncio</h1>

	<form method="POST" enctype="multipart/form-data">

		<div class="form-group">
			<label for="categoria">Categoria</label>
			<select name="categoria" id="categoria" class="form-control">
				<?php 
					foreach ($cats as $cat): ?>
						<option value="<?= $cat['id']; ?>" <?= ($info['id_categoria'] == $cat['id']) ? 'selected' : ''; ?>><?= utf8_encode($cat['nome']); ?></option>
					<?php endforeach;	
				?>
			</select>
		</div>

		<div class="form-group">
			<label for="titulo">Título</label>
			<input type="text" name="titulo" id="titulo" class="form-control" value="<?= $info['titulo'] ?>">
		</div>

		<div class="form-group">
			<label for="valor">Valor</label>
			<input type="text" name="valor" id="valor" class="form-control" value="<?= $info['valor'] ?>">
		</div>

		<div class="form-group">
			<label for="descricao">Descrição</label>
			<textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control"><?= $info['descricao'] ?></textarea>
		</div>

		<div class="form-group">
			<label for="estado">Estado de Conservação</label>
			<select name="estado" id="estado" class="form-control">
				<option value="1" <?= ($info['estado'] == '0') ? 'selected' : ''; ?>>Ruim</option>
				<option value="2" <?= ($info['estado'] == '1') ? 'selected' : ''; ?>>Bom</option>
				<option value="3" <?= ($info['estado'] == '2') ? 'selected' : ''; ?>>Ótimo</option>
			</select>
		</div>

		<div class="form-group">
			<label for="add_foto">Fotos do Anúncio</label>
			<input type="file" name="fotos[]" multiple><br>

			<div class="panel panel-default">
				<div class="panel-heading">Fotos do Anúncio</div>
				<div class="panel-body">
					<?php foreach ($info['fotos'] as $foto): ?>
						<div class="foto-item">
							<img src="<?= BASE_URL ?>assets/images/anuncios/<?= $foto['url'] ?>" border="0" class="img-thumbnail"><br>
							<a href="<?= BASE_URL ?>anuncios/excluirfoto/<?= $foto['id'] ?>" class="btn btn-default">Excluir Imagem</a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		
		<input type="submit" value="Salvar" class="btn btn-default">
	</form>
</div>