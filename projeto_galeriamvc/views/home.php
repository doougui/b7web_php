<fieldset>
	<legend>Adicionar uma foto</legend>
	
	<form method="POST" enctype="multipart/form-data">
		<label for="titulo"><b>Título:</b></label><br>
		<input type="text" id="titulo" name="titulo"><br><br>

		<label for="foto"><b>Foto:</b></label><br>
		<input type="file" id="foto" name="arquivo"><br><br>

		<input type="submit" value="Enviar arquivo">
	</form>
</fieldset>

<br><br>

<?php foreach ($fotos as $foto): ?>
	<img src="<?= BASE_URL ?>assets/images/galeria/<?= $foto['url'] ?>" width="300" alt="Foto"><br>
	<?= utf8_encode($foto['titulo']) ?>
	<hr>
<?php endforeach; ?>