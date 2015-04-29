<?php

include 'conexao.php';

$data = $_POST["data"];
$horario = $_POST["horario"];
$local = $_POST["local"];
$equipamento = $_POST["equipamento"];
$curso = $_POST["curso"];

$sql = "INSERT INTO reserva (data, horario, local, equipamento, curso)
    VALUES('$data', '$horario', '$local', '$equipamento', '$curso')";
    
    $query = mysql_query($sql) ;

    //header("location: Principal.php");

?>