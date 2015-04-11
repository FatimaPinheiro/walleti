<?php
include 'conexao.php';
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Walleti</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div class="container section1">
            <img src="img/walle.png" class="img-responsive" style="padding-left: 40px;">

            <form class="form-signin" method="post" action="AutenticarUsuario.php">
                <h2 class="form-signin-heading">Login</h2>
                <label for="inputEmail" class="sr-only">Email </label>
                <input type="email" id="email" class="form-control" placeholder="Email" required="" autofocus="">
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Continuar conectado
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" style="background: #4F94CD" value="email">Entrar</button>
            </form>

        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html> 