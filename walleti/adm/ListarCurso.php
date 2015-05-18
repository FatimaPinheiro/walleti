<?php
include '../conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lista de Cursos</title>
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
                    <li><a href="CadastroDeCurso.php">Cadastro de Curso</a></li>
                    <li class="active">Lista de Curso</li>
                </ol>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">Lista de Curso</div>
                <div class="panel-body">
                    <button type="submit" class="btn btn-primary"><a href="CadastroDeCurso.php">Novo Curso</a></button>
                    <p>
                    <div class = "container">
                        <table class="table table-striped">
                            <thead>
                            <th>ID</th>
                            <th>CURSO</th>
                            <th>EDITAR</th>
                            <th>EXCLUIR</th>
                            </thead>

                            <tbody>
                                <?php
                                $sql = "SELECT * FROM curso";

                                $resultado = mysql_query($sql);
                                while ($linha = mysql_fetch_assoc($resultado)) {
                                    echo '<tr>';
                                    echo '<td>' . $linha['idcurso'] . '</td>';
                                    echo '<td>' . $linha['NomeCurso'] . '</td>';
                                    echo '<td><a href="EditarCurso.php?idcurso=' . $linha['idcurso'] . '"><img src="img/alterar.png"></a></td>';
                                    echo '<td><a href="Editar/ExcluirCurso.php?idcurso=' . $linha['idcurso'] . '"><img src="img/excluir.png"></img></a></td>';
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


