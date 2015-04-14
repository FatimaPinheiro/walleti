<?php

include 'conexao.php';

$nome = $_POST["nome"];
$tipo = $_POST["tipo"];
$descricao = $_POST["descricao"];
$quandidade = $_POST["quandidade"];
$tombo = $_POST["tombo"];

 $sql = "INSERT INTO equipamento(nome, tipo, descricao, quantidade, tombo)
    VALUES('$nome', '$tipo', '$descricao', '$quantidade', '$tombo')";
    
     $query = mysql_query($sql) or die("Houve um erro na gravação dos dados, verifique os valores passados");

   
    header("location: Principal.php"); 
   
    
?>



