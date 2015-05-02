<?php

include 'conexao.php';

$data = $_POST["data"];
$horario = $_POST["horario"];
$local = $_POST["local"];
$equipamento = $_POST["equipamento"];
$curso = $_POST["curso"];

$sql = "INSERT INTO reserva (data, horario, local, equipamento, curso)
    VALUES('$data', '$horario', '$local', '$equipamento', '$curso')";
    
    $query = mysql_query($sql) or die("Houve um erro na gravação dos dados, verifique os valores passados");

    header("location: Principal.php");

?>