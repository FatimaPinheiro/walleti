<?php
include '../conexao.php';
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
            <?php
            include './Menu.php';
            ?>
            <ol class="breadcrumb">
                <li class="active">Início</li>
            </ol>
            <div class="row">
                <div class="col-md-10">
                <h2>Bem-Vindo ao Walleti</h2>

                <p class="lead">Usuário: <?php echo $_SESSION['nome']; ?> </p>
                <p class="lead">Você é um usuário: Administrador </p>

                <h4>O walleti é um sistema de reservas de equipamentos!</h4>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary"><a href="CadastrodeReservas.php">Cadastar Reservas</a></button>
                </div>

            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>

