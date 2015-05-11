<?php

include '../conexao.php';

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$tombo = $_POST["tombo"];
$situacao = $_POST["situacao"];

    $sql = "INSERT INTO equipamento(nome, descricao, tombo, situacao)
    VALUES('$nome', '$descricao', '$tombo', 'Disponivel')";
    
    
    
     $query = mysql_query($sql) or die("Houve um erro na gravação dos dados, verifique os valores passados");
 
    header("location: Principal.php"); 
   
    
?>



