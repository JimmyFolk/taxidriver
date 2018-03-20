<?php
	$title = 'Nova Corrida';
	require 'header.php';
?>

		<form action="cad_corrida.php" method="post" class="form-horizontal">

			<?php
				require 'db_conn_conf.php';
				require 'cad_corrida_post.php';
			?>

			<h3>Escolha o Motorista</h3>

			
					<label for="motorista">Motorista</label>
					<select id="motorista" name="motorista">
						<option value="">- Escolha o motorista -</option>

						<?php

								$totalEntradas = $con->query("
								SELECT id , name FROM motoristas WHERE status = 1
								");
							
								while ( $row = $totalEntradas->fetch_assoc() ){
									print "<option value=$row[id]>$row[name]</option>";
								
								}

						?>
					</select>

					<br/>

					<label for="cliente">Cliente</label>
					<select id="cliente" name="cliente">
						<option value="">- Escolha o cliente -</option>

						<?php

								$totalEntradas = $con->query("
								SELECT id , name FROM clientes
								");
							
								while ( $row = $totalEntradas->fetch_assoc() ){
									print "<option value=$row[id]>$row[name]</option>";
								
								}

						?>
					</select>

					<br/>
					<label for="valor">Valor (R$)</label>	
					<input type="text" id="valor" name="valor">

			<br>
			<a href="corridas.php" class="btn btn-default">Voltar</a>
			<button type="submit" class="btn btn-primary">Registrar Corrida</button>
		</form>

<?php
	require 'footer.php';
?>