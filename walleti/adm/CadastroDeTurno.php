<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro de Turno</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/Principal.css">

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
                    <li class="active">Cadastro de Turno</li>
                </ol>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">Lista de Turnos</div>
                <div class="panel-body">
                    <button type="submit" class="btn btn-primary"><a href="ListarTurno.php">Listar Turnos</a></button>
                    <p>
                    <form method="post" action="EnviarCadastroTurno.php">
                        <label for="turno">Turno</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div>
                                        <input type="text" name="turno" class="form-control" id="inputTurno" placeholder="Ex. Matutino">
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>

                            
                        </div>
                    </form>
                    </p>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>


