<!DOCTYPE html>
<?php
include("../conexao.php");

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
        <title>Cadastro de Local</title>
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
                    <li class="active">Cadastro de Local</li>
                </ol>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">Cadastro de Local</div>
                <div class="panel-body">
                    <button type="submit" class="btn btn-primary"><a href="ListarLocal.php">Listar Locais</a></button>
                    <p>
                    <form method="post" action="">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                        <label for="nome">Local</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <input type="text" name="nome" class="form-control" value="<?php echo $row['nome'];?>" id="inputLocal" placeholder="Nome  do Local">
                                    </div>
                                </div>

                                </p>
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
