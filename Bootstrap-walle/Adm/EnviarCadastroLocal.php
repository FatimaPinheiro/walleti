<?php

include '../conexao.php';

$nome = $_POST["nome"];

$sql = "INSERT INTO local(nome)
    VALUES('$nome')";
    
     $query = mysql_query($sql) or die("Houve um erro na gravação dos dados, verifique os valores passados");

   
    header("location: Principal.php");

?>

