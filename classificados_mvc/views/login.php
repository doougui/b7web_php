	<div class="container">
		<h1>Login</h1>
	
		<?= $msg ?>

		<form method="POST">
			<div class="form-group">
				<label for="email">E-mail:</label>
				<input class="form-control" type="email" id="email" name="email">
			</div>

			<div class="form-group">
				<label for="senha">Senha:</label>
				<input class="form-control" type="password" id="senha" name="senha">
			</div>

			<input class="btn btn-default" type="submit" value="Entrar">
		</form>
	</div>