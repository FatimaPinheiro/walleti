<?php
 
   
// CONEXÃO COM O ARQUIVO QUE CONECTA AO BANCO DE DADOS
   include "conexao.php";
    
//VARIÁVEIS RECEBENDO OS VALORES DOS NAMES

$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];


//CRIEI UMA VARIÁVEL CHAMADA $sql que passará o dados do formulário 
//para o banco, esta sequencia abaixo é da ordem do banco de dados, 
//deve ser exatamente igual ao banco de vocês. Veja a sintaxe: 
//Insert into nomedatabela(campos do banco de dados) VALUES (variáveis informadas acima)
    $sql = "INSERT INTO usuario(nome, email, cpf, senha)
    VALUES('$nome', '$email', '$cpf', '$senha')";
    
     $query = mysql_query($sql) or die("Houve um erro na gravação dos dados, verifique os valores passados");

   
    header("location: Principal.php"); 
   
    
?>