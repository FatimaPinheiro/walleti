<?php

include 'conexao.php';

$curso = $_POST["curso"];

$sql = "INSERT INTO curso(curso)
    VALUES('$curso')";
    
     $query = mysql_query($sql) or die("Houve um erro na gravação dos dados, verifique os valores passados");

   
    header("location: Principal.php");

?>

