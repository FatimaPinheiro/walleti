<?php

	$conexao = mysql_connect('localhost', 'root', '230785') or die('Não foi possivel se conectar: '.mysql_error());

	if ($conexao == TRUE) 
	{
		mysql_select_db('walledb');
	}

?>


