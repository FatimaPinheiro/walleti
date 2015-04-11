<?php

	$conexao = mysql_connect('localhost', 'root', '') or die('Não foi possivel se conectar: '.mysql_error());

	if ($conexao == TRUE) 
	{
		mysql_select_db('mydb');
	}

?>

