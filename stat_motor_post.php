<?php


	if($_POST){
	$result = $con->query("
					SELECT id FROM motoristas");

			while ( $row = $result->fetch_assoc() ){
				$ativo = isset($_POST['ativo_' . $row['id']]) ? 1 : 0;

				$con->query("UPDATE motoristas SET status = $ativo WHERE id = $row[id]");

			}

		print 'Status alterado com sucesso!';
	}

?>