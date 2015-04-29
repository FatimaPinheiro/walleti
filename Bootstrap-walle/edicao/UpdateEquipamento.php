<?php

include '../conexao.php';
$id = $_POST['id'];

$sql = "UPDATE equipamento SET  
                    nome = '$nome',
                    tipo = '$tipo',
                    descricao ='$descricao',
                    quantidade ='$quantidade',
                    tombo ='$tombo',
         WHERE  id = '$id'";
?>

