<?php

include '../conexao.php';

$local = $_POST["local"];
$horario_para_uso = $_POST["horario_para_uso"];
$data_reserva = $_POST["data_reserva"];
$equipamento = $_POST["equipamento"];
$curso = $_POST["curso"];

           
$sql = "INSERT INTO reserva (data_reserva, horario_para_uso, local, equipamento, curso, status)
    VALUES('$data_reserva', '$horario_para_uso', '$local', '$equipamento', '$curso', 'Reservado',)";
    
    $query = mysql_query($sql) or die("Houve um erro na gravação dos dados, verifique os valores passados");

    header("location: Principal.php");

?>