<?php

include '../conexao.php';

$horario = $_POST["horario"];

$sql = "INSERT INTO horario(horario)
    VALUES('$horario')";
    
     $query = mysql_query($sql) or die("Houve um erro na gravação dos dados, verifique os valores passados");

   
    header("location: Principal.php");

?>

