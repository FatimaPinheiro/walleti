<?php
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inicio</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/Principal.css">
    </head>
    <body>
        <div class="container section1">
            <?php            include '../Bootstrap-walle/navbar.php'; ?>
            <div class="container">
                <ul class="nav nav-tabs">
                    <li role="presentation" class="active"><a href="#">Lista de Equipamentos</a></li>
                    <li role="presentation"><a href="#">Lista de Usuarios</a></li>
                    <li role="presentation"><a href="#">Lista de Reservas</a></li>
                </ul>   
               <?php include '../Bootstrap-walle/listar/ListarEquipamento.php'; ?>
            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>

