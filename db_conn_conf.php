<?php
$con = mysqli_connect( 'localhost', 'root', 'root', 'taxidriver' );
$con OR die('CONEXAO COM TABELA FALHOU');


function fecharDB() {
	$con->close();
}

register_shutdown_function('fecharDB');