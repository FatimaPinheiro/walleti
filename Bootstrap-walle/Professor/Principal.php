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
            <img src="img/walle.png" class="img-responsive" style="padding: 0px 0px 20px 350px;">
            <nav class="navbar navbar-inverse">                
                <div id="navbar" class="collapse navbar-collapse" style="background: #4F94CD">
                    <ul class="nav navbar-nav">
                        <li><a href="Principal.php" style="color: #FFFFFF"><img src="img/inicio.png" style="width: 30px;"> Inicio</a></li>
                        <li><a href="cadastros/Cadastros.php" style="color: #FFFFFF"><img src="img/cadastros.png" style="width: 30px;">Cadastros</a></li>
                        <li><a href="cadastros/CadastrodeReservas.php" style="color: #FFFFFF"><img src="img/reservas.png" style="width: 30px;">Reservas</a></li>
                        <li><a href="rel_socio_com.php" style="color: #FFFFFF"><img src="img/relatorios.png" style="width: 30px;">Relatórios</a></li>
                        <li><a href="#contact" style="color: #FFFFFF"><img src="img/sair.png" style="width: 30px;">Sair</a></li>
                    </ul>

                </div>
            </nav>
            <div class="jumbotron">
                <h2>Bem-Vindo ao Walleti</h2>

                <p class="lead">Usuário: </p>
                <p class="lead">Você é um usuário: </p>

                <h4>O walleti é um sistema de reservas de equipamentos!</h4>
                <a class="btn btn-lg btn-success" href="#" style="background: #4F94CD;" role="button">Cadastrar Reserva</a>
                
            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>

