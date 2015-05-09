<?php

include '../conexao.php';

$turno = $_POST["turno"];

$sql = "INSERT INTO turno(turno)
    VALUES('$turno')";
    
     $query = mysql_query($sql) or die("Houve um erro na gravação dos dados, verifique os valores passados");

   
    header("location: Principal.php");

?>
