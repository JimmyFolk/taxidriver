<?php
	$title = 'Sucesso!';
	require 'header.php';
?>

	<?php
		require 'cad_motor_post.php'; //chama pagina com script para escrevera no db
	?>

	<br>

	<h1>Cadastro de Motoristas</h1>

	<form action="cad_motor.php" method="post" class="form-horizontal">

		<div>
			<label for="nome">Nome</label>
			<input type="text" placeholder="João Silva" id="name" name="name" required>
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
			<label for="veiculo">modelo do veículo:</label>
			<input type="text" placeholder="gol, palio, chevette, del rey" id="veiculo" name="mod_carro" required>
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
	<a href="motoristas.php" class="btn btn-primary">Voltar</a>

<?php
	require 'footer.php';
?>