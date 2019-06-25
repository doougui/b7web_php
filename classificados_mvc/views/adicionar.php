<div class="container">
	<?= $msg ?>
	
	<h1>Meus Anúncios - Adicionar Anúncio</h1>

	<form method="POST">

		<div class="form-group">
			<label for="categoria">Categoria</label>
			<select name="categoria" id="categoria" class="form-control">
				<?php 
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