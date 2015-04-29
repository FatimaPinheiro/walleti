<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lista de Equipamentos</title>
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
                </div>
            </nav>
            <div class="row">
                <div class="col-md-12">
            <button class="btn btn-lg btn-primary btn-block button" type="submit" style="background: #4F94CD; width: 20%; margin-right: 10px;"><a href="../cadastros/CadastroDeEquipamento.php">Novo</a></button>
                </div>
            </div>    
            <div class = "container">
                <h3>Listagem de Equipamentos</h3>
                <table class="table table-striped">
                    <thead>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>TIPO</th>
                    <th>DESCRIÇÃO</th>
                    <th>QUANTIDADE</th>
                    <th>TOMBO</th>
                    </thead>

                    <tbody>
                        <?php
                        $conexao = mysql_connect("localhost", "root", "230785");
                        if (!$conexao)
                            die("Falha ao conectar ao banco");
                        $bd = mysql_select_db("walledb");
                        $sql = "SELECT * FROM equipamento";

                        mysql_query("SET character_set_results = 'utf-8', "
                                . "character_set_client = 'utf-8', character_set_connection = 'utf-8', "
                                . "character_set_database = utf-8, character_set_server = 'utf-8'", $conexao);
                        $resultado = mysql_query($sql);
                        while ($linha = mysql_fetch_assoc($resultado))
                        {
                            echo '<tr>';
                            echo '<td>'. $linha['id'].'</td>';
                            echo '<td>'. $linha['nome'].'</td>';
                            echo '<td>'. $linha['tipo'].'</td>';
                            echo '<td>'. $linha['descricao'].'</td>';                         
                            echo '<td>'. $linha['quantidade'].'</td>';                         
                            echo '<td>'. $linha['tombo'].'</td>';      
                            echo '<td><a href="../edicao/EdicaoDeEquipamento.php?id='.$linha['id'].'">Editar</a></td>';  
                            echo '</tr>';
                        }
                        mysql_close($conexao);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>

