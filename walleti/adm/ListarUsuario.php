<?php
include '../conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lista de Usuários</title>
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
                    <li><a href="CadastroDeUsuario.php">Cadastro de Usuário</a></li>
                    <li class="active">Lista de Usuários</li>
                </ol>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">Lista de Usuários</div>
                <div class="panel-body">
                    <button type="submit" class="btn btn-primary"><a href="CadastroDeUsuario.php">Novo Usuário</a></button>
                    <p>
                    <div class = "container">
                        <table class="table table-striped">
                            <thead>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>EMAIL</th>
                            <th>CPF</th>
                            <th>EDITAR</th>
                            <th>EXCLUIR</th>
                            </thead>

                            <tbody>

                                <?php
                                $sql = "SELECT * FROM usuario";
                                $resultado = mysql_query($sql);
                                while ($linha = mysql_fetch_assoc($resultado)) {
                                    echo '<tr>';
                                    echo '<td>' . $linha['id'] . '</td>';
                                    echo '<td>' . $linha['nome'] . '</td>';
                                    echo '<td>' . $linha['email'] . '</td>';
                                    echo '<td>' . $linha['CPF'] . '</td>';
                                    echo '<td><a href="EditarUsuario.php?id=' . $linha['id'] . '"><img src="img/alterar.png"></img></a></td>';
                                    echo '<td><a href="Editar/ExcluirUsuario.php?id=' . $linha['id'] . '"><img src="img/excluir.png"></img></a></td>';
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

