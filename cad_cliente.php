<?php
	$title = 'Cadastro de Clientes';
	require 'header.php';
?>

	<?php
		require 'cad_client_post.php'; //chama pagina com script para escrever no db
	?>

	<br>

	<h1>Cadastro de Clientes</h1>

	<form action="cad_cliente.php" method="post" class="form-horizontal">

		<div>
			<label for="nome">Nome</label>
			<input type="text" placeholder="Maria Oliveira" id="name" name="name" required>
		</div>

		<div>
			<label for="Data de Nascimento">Data de Nascimento</label>
			<input type="date" placeholder="DD/MM/AAAA" id="data" name="data" required>
		</div>

		<div>
			<label for="cpf">CPF</label>
			<input type="text" placeholder="12345678910" id="cpf" name="cpf" required>
		</div>

		<div>
			<input type="radio" value="M" id="masculino" name="sexo" required>
			<label for="masculino">masculino</label>
			<input type="radio" value="F" id="feminino" name="sexo" required>
			<label for="feminino">feminino</label>
		</div>

		<div>
			<button type="submit">Cadastrar</button>
		</div>

	</form>
	<br>
	<a href="clientes.php" class="btn btn-primary">Voltar</a>

<?php
	require 'footer.php';
?>