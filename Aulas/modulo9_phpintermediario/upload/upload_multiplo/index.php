<pre>
<?php 

if (isset($_FILES['arquivo'])) {
	if (count($_FILES['arquivo']['tmp_name']) > 0) {
		for ($i = 0; $i < count($_FILES['arquivo']['tmp_name']); $i++) {

			$path = pathinfo($_FILES['arquivo']['name'][$i]);

			$nome_do_arquivo = md5($_FILES['arquivo']['name'][$i].time().rand(0, 9999)).'.'.$path['extension'];
			move_uploaded_file($_FILES['arquivo']['tmp_name'][$i], 'arquivos/'.$nome_do_arquivo);
		}
	}
}

?>
</pre>

<form method="POST" enctype="multipart/form-data">
	
	Arquivo: <br/><br/>
	<input type="file" name="arquivo[]" multiple><br/><br/>

	<input type="submit" value="Enviar arquivos">

</form>