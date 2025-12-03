<?php session_start();

	$mysqli = new mysqli("localhost", "root", "admin", "garfield_db"); //login e senha do banco para conecxão
	$mysqli->set_charset('utf8mb4');

	if ($mysqli -> connect_errno) { // avisa erro
		echo "Cuidado com a depressão mas... a conexão com o banco falhou: erro número " . $mysqli -> connect_errno;
	}
?>