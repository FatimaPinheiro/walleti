<?php

include '../conexao.php';

$NomeCurso = $_POST["NomeCurso"];

$sql = "INSERT INTO curso(NomeCurso)
    VALUES('$NomeCurso')";
    
     $query = mysql_query($sql) or die("Houve um erro na gravação dos dados, verifique os valores passados");

   
    header("location: Principal.php");

?>

