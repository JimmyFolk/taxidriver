<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

try{

	require 'db_conn_conf.php';

	$name = $_POST['name'];
	$bday = $_POST['data'];
	$cpf = trim( $_POST['cpf'] ); //trata string p/ retirar eventuais espacos em branco //
	$cpf = preg_replace( '#\D#', '', $cpf ); //trata string p/ aceitar apenas digitos numericos //
	$cpf = str_replace( array('.', '-'), array('',''), $cpf ); // retira ponto e traco //
	$mod_carro = $_POST['mod_carro'];
	$sexo = $_POST['sexo'];
	$status = 1; //motoristas cadastrados ficam ativos por padrao //


	
	$con->query("
			INSERT INTO motoristas (
				name,
				bday,
				cpf,
				mod_carro,
				status,
				sexo
			)
			-- valores a serem inseridos sao tratados contra injection.
			VALUES (
				'".$con->real_escape_string( $name )."',
				'".$con->real_escape_string( $bday )."',
				'".$con->real_escape_string( $cpf )."',
				'".$con->real_escape_string( $mod_carro )."',
				'".$con->real_escape_string( $status )."',
				'".$con->real_escape_string( $sexo )."'
			)

		");
		header("Location: motor_success.php");


} catch ( Exception $e ) {
		print $e->getMessage();
	}
}



?>
