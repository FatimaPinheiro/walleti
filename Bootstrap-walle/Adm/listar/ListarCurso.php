<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lista de Cursos</title>
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
                   
                </div>
            </nav>
            <div class="row">
                <div class="col-md-12">
            <button class="btn btn-lg btn-primary btn-block button" type="submit" style="background: #4F94CD; width: 20%; margin-right: 10px;"><a href="../cadastros/CadastroDeCurso.php">Novo</a></button>
                </div>
            </div>
            <div class = "container">
                <h3>Listagem de Cursos</h3>
                <table class="table table-striped">
                    <thead>
                    <th>ID</th>
                    <th>CURSO</th>
                    </thead>

                    <tbody>
                        <?php
                        $conexao = mysql_connect("localhost", "root", "");
                        if (!$conexao)
                            die("Falha ao conectar ao banco");
                        $bd = mysql_select_db("mydb");
                        $sql = "SELECT * FROM curso";

                        mysql_query("SET character_set_results = 'utf-8', "
                                . "character_set_client = 'utf-8', character_set_connection = 'utf-8', "
                                . "character_set_database = utf-8, character_set_server = 'utf-8'", $conexao);
                        $resultado = mysql_query($sql);
                        while ($linha = mysql_fetch_assoc($resultado))
                        {
                            echo '<tr>';
                            echo '<td>'. $linha['idcurso'].'</td>';
                            echo '<td>'. $linha['NomeCurso'].'</td>';  
                            echo '<td><a href="../Editar/EditarCurso.php?idcurso='.$linha['idcurso'].'"><img src="../img/alterar.png"></a></td>';
                            echo '<td><a href="../Editar/ExcluirCurso.php?idcurso=' . $linha['idcurso'] . '"><img src="../img/excluir.png"></img></a></td>';
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


