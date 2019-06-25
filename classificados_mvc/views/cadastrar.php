	<div class="container">
		<h1>Cadastre-se</h1>

		<?= $msg ?>

		<form method="POST">
			<div class="form-group">
				<label for="nome">Nome:</label>
				<input class="form-control" type="text" id="nome" name="nome">
			</div>

			<div class="form-group">
				<label for="email">E-mail:</label>
				<input class="form-control" type="email" id="email" name="email">
			</div>

			<div class="form-group">
				<label for="senha">Senha:</label>
				<input class="form-control" type="password" id="senha" name="senha">
			</div>

			<div class="form-group">
				<label for="telefone">Telefone:</label>
				<input class="form-control" type="text" id="telefone" name="telefone">
			</div>

			<input class="btn btn-default" type="submit" value="Cadastrar">
		</form>
	</div>