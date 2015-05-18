<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro de Curso</title>
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
                    <li class="active">Cadastro de Curso</li>
                </ol>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">Cadastro de Curso</div>
                <div class="panel-body">
                    <button type="submit" class="btn btn-primary"><a href="ListarCurso.php">Listar Cursos</a></button>
                    <p>
                    <form method="post" action="EnviarCadastroCurso.php">
                        <label for="curso">Curso</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <input type="text" name="NomeCurso" class="form-control" id="inputCurso" placeholder="Nome  do Curso">
                                    </div>
                                </div>

                                </p>
                            </div>

                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        </div>
    </body>
</html>
