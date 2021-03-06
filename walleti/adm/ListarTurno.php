<?php
include '../conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lista de Turno</title>
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
                    <li><a href="CadastroDeTurno.php">Cadastro de Turno</a></li>
                    <li class="active">Lista de Turnos</li>
                </ol>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">Lista de Turnos</div>
                <div class="panel-body">
                    <button type="submit" class="btn btn-primary"><a href="CadastroDeTurno.php">Novo Turno</a></button>
                    <p>
                    <div class = "container">
                        <table class="table table-striped">
                            <thead>
                            <th>ID</th>
                            <th>TURNO</th>
                            <th>EDITAR</th>
                            <th>EXCLUIR</th>
                            </thead>

                            <tbody>
                                <?php
                                $sql = "SELECT * FROM turno";
                                $resultado = mysql_query($sql);
                                while ($linha = mysql_fetch_assoc($resultado)) {
                                    echo '<tr>';
                                    echo '<td>' . $linha['id'] . '</td>';
                                    echo '<td>' . $linha['turno'] . '</td>';
                                    echo '<td><a href="EditarTurno.php?id=' . $linha['id'] . '"><img src="img/alterar.png"></a></td>';
                                    echo '<td><a href="Editar/ExcluirTurno.php?id=' . $linha['id'] . '"><img src="img/excluir.png"></img></a></td>';
                                    echo '</tr>';
                                }
                                mysql_close($conexao);
                                ?>
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


