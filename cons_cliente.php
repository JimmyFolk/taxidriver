<?php
	$title = 'Consulta de Clientes';
	require 'header.php';
?>

	<h1>Listagem de Clientes</h1>
	<br>

	<table border=1>
		<thead>
			<tr>
				<th align="center">Nome</th>
				<th align="center">Data de Nascimento</th>
				<th align="center">CPF</th>
				<th align="center">Sexo</th>
			</tr>
		</thead>
	

		<tbody>

			<?php

				require 'db_conn_conf.php';

				$totalEntradas = $con->query("
					SELECT * FROM clientes ORDER BY name
					");

				while ( $row = $totalEntradas->fetch_assoc() ){
					print '<tr>';
					print '<td>' . $row['name'] . '</td>';
					print '<td align=center>' . $row['bday'] . '</td>';
					print '<td align=center>' . $row['cpf'] . '</td>';
					//inserir if pra corrigir output sexo de m/f para masculino/feminino
					print '<td align=center>' . $row['sexo'] . '</td>';
					print '</tr>';
				}
			?>


		</tbody>
	</table>

		<br>
		<a href="clientes.php" class="btn btn-primary">Voltar</a>
		
<?php
	require 'footer.php';
?>