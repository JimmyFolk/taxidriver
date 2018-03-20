<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

try{


	$motor = isset($_POST['motorista']) ? (int)$_POST['motorista'] : FALSE;
	$client = isset($_POST['cliente']) ? (int)$_POST['cliente'] : FALSE;
	$valor = isset($_POST['valor']) ? (float)$_POST['valor'] : FALSE;


		if(!$motor){
			throw new Exception('Escolha um motorista!');
		}

		if(!$client){
			throw new Exception('Escolha um cliente!');
		}

		$result = $con->query("SELECT 1 FROM motoristas 
			WHERE status = 1 
			AND id = $motor LIMIT 1");

		if(!$result){
			throw new Exception('Não há motoristas ativos com o ID fornecido');
		}


		$result = $con->query("SELECT 1 FROM clientes 
					WHERE id = $client LIMIT 1");

				if(!$result){
					throw new Exception('Não há clientes com o ID fornecido');
				}

		



	$con->query("
			INSERT INTO corridas (
				id_motorista,
				id_cliente,
				valor
			)
			-- valores a serem inseridos sao tratados contra injection.
			VALUES (
				". $motor .",
				". $client .",
				".  $valor ."
			)

		");
		
		header("Location: corrida_success.php");


} catch ( Exception $e ) {
		print $e->getMessage();
	}
}



?>
