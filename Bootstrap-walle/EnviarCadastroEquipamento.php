<?php

include 'conexao.php';

$nome = $_POST["nome"];
$tipo = $_POST["tipo"];
$descricao = $_POST["descricao"];
$quantidade = $_POST["quantidade"];
$situacao = $_POST["situacao"];

while ($quantidade > 0){
    $sql = "INSERT INTO equipamento(nome, tipo, descricao, quantidade, situacao)
    VALUES('$nome', '$tipo', '$descricao', '1', 'Disponivel')";
    
    $quantidade--;
    
     $query = mysql_query($sql) or die("Houve um erro na gravação dos dados, verifique os valores passados");
}
 

   
    header("location: Principal.php"); 
   
    
?>



