<!DOCTYPE html>
<?php
include '../../conexao.php';

if (!empty($_POST['nome'])) {
    $id = $_POST['id'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
 
    $sql = "UPDATE usuario SET  
                                    senha ='$senha',
                                    nome = '$nome',
                                    cpf ='$cpf',
                                    email = '$email'
                                   
                         WHERE  id = $id";
    $quey = mysql_query($sql);
}

$id = $_GET['id'];
$sql = "SELECT *
                    FROM usuario
                    WHERE id = $id
                    LIMIT 1";

$query = mysql_query($sql);
$row = mysql_fetch_assoc($query);
?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro de Usuário</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/Principal.css">

    </head>
    <body>
        <div class="container section1">
            <img src="../img/walle.png" class="img-responsive" style="padding: 0px 0px 20px 350px;">
            <nav class="navbar navbar-inverse">
                <div id="navbar" class="collapse navbar-collapse" style="background: #4F94CD">
                    <ul class="nav navbar-nav">
                        <li><a href="../Principal.php" style="color: #FFFFFF"><img src="../img/inicio.png" style="width: 30px;"> Inicio</a></li>
                        <li><a href="../cadastros/Cadastros.php" style="color: #FFFFFF"><img src="../img/cadastros.png" style="width: 30px;">Cadastros</a></li>
                        <li><a href="../cadastros/CadastrodeReservas.php" style="color: #FFFFFF"><img src="../img/reservas.png" style="width: 30px;">Reservas</a></li>
                        <li><a href="#contact" style="color: #FFFFFF"><img src="../img/relatorios.png" style="width: 30px;">Relatórios</a></li>
                        <li><a href="../Index.php" style="color: #FFFFFF"><img src="../img/sair.png" style="width: 30px;">Sair</a></li>
                    </ul>
                    <div class="row" style="padding-top: 14px; padding-right: -0px;">
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Pesquisar!</button>
                                </span>
                                <input type="text" class="form-control" placeholder="Busca...">
                            </div>
                        </div>

                    </div>
                </div><!--/.nav-collapse -->


            </nav>
            <form class="form-horizontal equipamento" method="POST" action="">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" /> 
                <div class="form-group">
                    <label for="inputnome" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nome" value="<?php echo $row['nome']; ?>" id="nome" placeholder="Nome" style="width: 70%;">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputemail" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  name="email" value="<?php echo $row['email']; ?>" id="email" placeholder="email@exemplo.com" style="width: 70%;">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputcpf" class="col-sm-2 control-label">CPF</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="cpf" id="cpf" value="<?php echo $row['CPF']; ?>" placeholder="111.111.111-00" style="width: 70%;">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Senha</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="senha" value="<?php echo $row['senha']; ?>" id="senha" placeholder="*********" style="width: 70%;">
                    </div>
                </div>
                <div class="form-group">
                    <label for="adm" class="col-sm-2 control-label">Administrador</label>
                    <div class="col-sm-10">
                        <input type="checkbox" value="adm"> 
                    </div>
                </div>
                <div>
                    <button class="btn btn-lg btn-primary btn-block button" type="submit" style="background: #4F94CD; width: 20%; margin-right: 10px;">Salvar</button>

                </div>
            </form>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>
