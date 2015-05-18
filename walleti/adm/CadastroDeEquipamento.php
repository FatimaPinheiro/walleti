<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro de Equipamento</title>
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
                        <li class="active">Cadastro de Equipamento</li>
                    </ol>   
                </div>
            <div class="panel panel-primary">
                <div class="panel-heading">Cadastro de Equipamento</div>
                <div class="panel-body">
                    <button type="submit" class="btn btn-primary"><a href="ListarEquipamento.php">Listar Equipamentos</a></button>
                    <p>
                    <form method="post" action="EnviarCadastroEquipamento.php" >
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nomeEquipamento">Nome</label>
                                    <input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tombo" >Tombo</label>
                                    <input type="text" name="tombo" class="form-control" placeholder="Tombo">
                                </div>
                            </div>
                        </div>
                          <label for="descricao">Descrição</label>
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                   <textarea class="form-control" name="descricao" rows="2" ></textarea>
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
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>