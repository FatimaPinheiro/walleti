<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro de Usuário</title>
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
                    <li><a href="#">Cadastro</a></li>
                    <li class="active">Cadastro de Usuário</li>
                </ol>   
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">Cadastro de Usuário</div>
                <div class="panel-body">
                    <button type="submit" class="btn btn-primary"><a href="ListarUsuario.php">Listar Usuários</a></button>
                    <p>
                    <form method="post" action="">
                        <input type="hidden" name="id" />
                        <div class="row">
                        <div class="col-md-10">
                            <div>
                                <label for="inputnome">Nome</label>
                                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div>
                                    <label for="inputcpf">CPF</label>
                                    <input type="text" class="form-control" name="cpf" id="cpf" placeholder="111.111.111-00">
                                </div>
                            </div>
                             <div class="col-md-5">
                            <div>
                                <label for="inputemail">Email</label>
                                <input type="text" class="form-control"  name="email" id="email" placeholder="email@exemplo.com">
                            </div>
                        </div>
                        </div>
                         <div class="row">
                             <div class="col-md-5">
                                <div>
                                    <label for="adm">Nivel de Usuário</label>
                                    <select name="local" class="form-control">
                                        <option></option>
                                        <option>Professor</option>
                                        <option>Administrador</option>
                                    </select>
                                </div>
                            </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="inputPassword">Senha</label>
                                <input type="password" class="form-control" name="senha" id="senha" placeholder="*********" >
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



