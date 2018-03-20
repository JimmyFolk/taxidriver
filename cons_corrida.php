<?php
	$title = 'Consultar Corridas';
	require 'header.php';
?>


<h1>Listagem de Corridas</h1>
	<br>

	<table border=1>
		<thead>
			<tr>
				<th align="center">Motorista</th>
				<th align="center">Cliente</th>
				<th align="center">Valor</th>
				<th align="center">Data</th>
			</tr>
		</thead>
	

		<tbody>

			<?php

				require 'db_conn_conf.php';

				$totalEntradas = $con->query("
					SELECT mot.name as mot_name , cli.name as cli_name , cor.valor , cor.`data` FROM corridas as cor INNER JOIN motoristas as mot ON mot.id = cor.id_motorista INNER JOIN clientes as cli ON cli.id = cor.id_cliente
					");

				while ( $row = $totalEntradas->fetch_assoc() ){
					print '<tr>';
					print '<td>' . htmlspecialchars($row['mot_name'], ENT_QUOTES, 'UTF-8') . '</td>';
					print '<td>' . htmlspecialchars($row['cli_name'], ENT_QUOTES, 'UTF-8') . '</td>';
					print '<td>' . number_format($row['valor'], 2, ",", ".") . '</td>';
					print '<td>' . date("d/m/Y H:i" , strtotime($row['data'])) . '</td>';
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