<!DOCTYPE html>
<?php
include("../../conexao.php");

if (!empty($_POST['nome'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];


    $sql = "UPDATE local SET  
                        nome ='$nome'
                      

                        WHERE  id = $id";

    $query = mysql_query($sql);
}

$id = $_GET['id'];
$sql = "SELECT *
                    FROM local
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
        <title>Cadastro de Horário</title>
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

                </div><!--/.nav-collapse -->
            </nav>
            <form class="form-horizontal equipamento" method="post" action="">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                <div class="form-group">
                    <label for="nome" class="col-sm-2 control-label">Local</label>
                    <div class="col-sm-10">
                        <input type="text" name="nome" class="form-control" value="<?php echo $row['nome'];?>" style="width: 70%;">
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
