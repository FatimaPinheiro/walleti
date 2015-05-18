<!DOCTYPE html>
<?php
include '../conexao.php';
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Relatório de Usuários</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/Principal.css">
    </head>
    <body>
        <div class="container section1">
            <?php
            include './Menu.php';
            ?>
            <div>
                <ol class="breadcrumb">
                    <li><a href="Principal.php">Inicio</a></li>
                    <li class="active">Rel. de Usuários</li>
                </ol>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">Rel. de Usuários</div>
                <div class="panel-body">
                    <button type="submit" class="btn btn-primary"><a href="ListarReserva.php">Listar Usuários</a></button>
                    <p>
                    <form class="form-horizontal equipamento" method="post" action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="situacao">Situação</label>
                                    <select name="situacao" class="form-control" style="width: 90%;">
                                        <option></option>
                                    </select>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="data">Data Inicial</label>
                                    <div>
                                        <input type="date" name="data" class="form-control" style="width: 90%;">
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="data">Data Final</label>
                                    <div>
                                        <input type="date" name="data" class="form-control" style="width: 90%;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">Gerar Relatório</button>
                            </div>
                        </div>  

                    </form>
                    </p>
                </div>
            </div>  
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>

