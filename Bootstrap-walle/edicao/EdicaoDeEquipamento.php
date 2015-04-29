<?php include '../conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro de Equipamento</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/Principal.css">

    </head>
    <body>
        <div class="container section1">
            <?php
            include("../navbar.php");
            
            if(!empty($_POST['nome'])){
                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $tipo = $_POST['tipo'];
                $descricao = $_POST['descricao'];
                $quantidade = $_POST['quantidade'];
                $tombo = $_POST['tombo'];

                $sql = "UPDATE equipamento SET  
                                    nome = '$nome',
                                    tipo = '$tipo',
                                    descricao ='$descricao',
                                    quantidade ='$quantidade',
                                    tombo ='$tombo'
                         WHERE  id = $id";
                $quey = mysql_query($sql);
            }
            
            $id = $_GET['id'];


            $sql = "SELECT *
                    FROM equipamento
                    WHERE id = $id
                    LIMIT 1";
            $query = mysql_query($sql);
            $row = mysql_fetch_assoc($query);

            ?>
            <form class="form-horizontal equipamento" method="post" action="">
                
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                
                <div class="form-group">
                    <label for="nomeEquipamento" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" name="nome" class="form-control" id="inputEmail3" value="<?php echo $row['nome']; ?>" style="width: 70%;">
                    </div>
                </div>
                <div class="form-group">
                    <label for="tipoEquipamento" class="col-sm-2 control-label">Tipo</label>
                    <div class="col-sm-10">
                        <input type="text" name="tipo" class="form-control" value="<?php echo $row['tipo']; ?>"   style="width: 70%;" class="form-control">                    
                    </div>
                </div>
                <div class="form-group">
                    <label for="descricao" class="col-sm-2 control-label">Descrição</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="descricao" rows="2"  style="width: 70%;" ><?php echo $row['descricao']; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="quantidade" class="col-sm-2 control-label">Quantidade</label>
                    <div class="col-sm-10">
                        <input type="text" name="quantidade" class="form-control" id="inputEmail3" value="<?php echo $row['quantidade']; ?>" placeholder="Quantidade de equipamentos" style="width: 70%;">
                    </div>
                </div>
                <div class="form-group">
                    <label for="tombo" class="col-sm-2 control-label">Tombo</label>
                    <div class="col-sm-10">
                        <input type="int" name="tombo" class="form-control" id="inputTombo" value="<?php echo $row['tombo']; ?>" placeholder="Tombo do Equipamento" style="width: 70%;">
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