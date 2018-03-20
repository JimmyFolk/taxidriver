<?php
	$title = 'Consulta de Motoristas';
	require 'header.php';
?>

	<?php
		require 'db_conn_conf.php';
		require 'stat_motor_post.php'; //chama pagina com script para escrevera no db
	?>

	<div align="center">
	<h1>Listagem de Motoristas</h1>
	<br>


	<form method="post" action="cons_motor.php">
	<table border=1>
		<thead>
			<tr>
				<th align="center">Nome</th>
				<th align="center">Data de Nascimento</th>
				<th align="center">CPF</th>
				<th align="center">Carro</th>
				<th align="center">Sexo</th>
				<th align="center">Status</th>
			</tr>
		</thead>
	

		<tbody>

			<?php

				$totalEntradas = $con->query("
					SELECT * FROM motoristas ORDER BY name
					");

				while ( $row = $totalEntradas->fetch_assoc() ){
					print '<tr>';
					print '<td>' . $row['name'] . '</td>';
					print '<td align=center>' . $row['bday'] . '</td>';
					print '<td align=center>' . $row['cpf'] . '</td>';
					print '<td align=center>' . $row['mod_carro'] . '</td>';
					print '<td align=center>' . $row['sexo'] . '</td>';
					print '<td align=center><input type=checkbox value=1 name="ativo_' . $row['id'] . '"' . ($row['status'] ? ' checked' : '') . '/></td>';
					print '</tr>';
				}
			?>

		</tbody>
		<tfoot>
			<tr>
				<td colspan="6" align="right">
					<button type="submit" class="btn btn-primary">Alterar Status</button>
					<input type="hidden" name="X" value="X">
				</td>
			</tr>
		</tfoot>
	</table>

   </form>

		<br>
		<a href="motoristas.php" class="btn btn-primary">Voltar</a>


<?php
	require 'footer.php';
?>