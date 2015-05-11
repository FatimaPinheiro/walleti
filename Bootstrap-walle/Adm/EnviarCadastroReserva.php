<?php

include '../conexao.php';

$data_reserva = $_POST["data_reserva"];
$usuario_id = $_POST["usuario_id"];
$curso_idcurso = $_POST["curso_idcurso"];
$horario_id = $_POST["horario_id"];
$local_id = $_POST["local_id"];
$turno_id = $_POST["turno_id"];
$equipamento_id = $_POST["equipamento_id"];

           
$sql = "INSERT INTO reserva (data_reserva, usuario_id, curso_idcurso, horario_id, local_id,turno_id, status, equipamento_id)
    VALUES('$data_reserva', '$usuario_id', '$curso_idcurso', '$horario_id', '$local_id', '$turno_id', 'Reservado','$equipamento_id')";
    
    $query = mysql_query($sql) or die("Houve um erro na gravação dos dados, verifique os valores passados");

    header("location: Principal.php");

?>