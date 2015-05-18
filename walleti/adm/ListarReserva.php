<?php
include '../conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lista de Reservas</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/Principal.css">

    </head>
    <body>
        <div class="container section1">
            <div>
                <?php
                include './Menu.php';
                ?>
            </div>
            <div>
                <ol class="breadcrumb">
                    <li><a href="Principal.php">Inicio</a></li>
                    <li><a href="CadastrodeReservas.php">Cadastro de Reservas</a></li>
                    <li class="active">Lista de Reservas</li>
                </ol>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">Lista de Reservas</div>
                <div class="panel-body">
                    <button type="submit" class="btn btn-primary"><a href="CadastrodeReservas.php">Nova Reserva</a></button>
                    <p>
                    <div class = "container">
                        <table class="table table-striped">
                            <thead>
                            <th>ID</th>
                            <th>USUÁRIO</th>
                            <th>HORÁRIO</th>
                            <th>CURSO</th>
                            <th>EQUIPAMENTO</th>
                            <th>EMPRESTAR</th>
                            <th>EXCLUIR</th>
                            </thead>

                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    </p>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>
