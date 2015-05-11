<!DOCTYPE html>
<?php
include '../../conexao.php';
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro de Reservas</title>
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
                        <li><a href="Cadastros.php" style="color: #FFFFFF"><img src="../img/cadastros.png" style="width: 30px;">Cadastros</a></li>
                        <li><a href="CadastrodeReservas.php" style="color: #FFFFFF"><img src="../img/reservas.png" style="width: 30px;">Reservas</a></li>
                        <li><a href="#contact" style="color: #FFFFFF"><img src="../img/relatorios.png" style="width: 30px;">Relatórios</a></li>
                        <li><a href="../Index.php" style="color: #FFFFFF"><img src="../img/sair.png" style="width: 30px;">Sair</a></li>
                    </ul>

                </div><!--/.nav-collapse -->
            </nav>
            <form class="form-horizontal equipamento" method="post" action="../EnviarCadastroReserva.php">
                <div class="row">
                    <div class="col-md-8">
                        <label for="usuario">Usuário</label>
                        <select name = "usuario" class="form-control">
                            <option> </option>
                            <?php
                            $sqlUsuario = "select * from usuario where nivel = 1  order by nome";
                            $result = mysql_query($sqlUsuario);

                            while ($registro = mysql_fetch_array($result)) {
                                $id = $registro["id"];

                                if ($id == $id)
                                    $selecionado = "selected";
                                else
                                    $selecionado = "";

                                print "<option value = \"$id\" $selecionado > $registro[nome] </option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="data">Data</label>
                        <div>
                            <input type="date" name="data" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="horario">Horário</label>
                    <select name="local" class="form-control">
                        <option></option>
                        <?php
                        $sqlhorario = "select * from horario order by horario";
                        $resulthorario = mysql_query($sqlhorario);



                        while ($registro = mysql_fetch_array($resulthorario)) {
                            $id = $registro["id"];

                            if ($id == $id)
                                $selecionado = "selected";
                            else
                                $selecionado = "";

                            print "<option value = \"$id\" $selecionado > $registro[horario] </option>";
                        }
                        ?>
                    </select>
                    </div>
                    <div class="col-md-6">
                        <label for="Turno">Turno</label>
                    <div>
                        <select name="turno" class="form-control" >
                            <option></option>
                            <?php
                            $sqlturno = "select * from turno order by turno";
                            $resultturno = mysql_query($sqlturno);



                            while ($registro = mysql_fetch_array($resultturno)) {
                                $id = $registro["id"];

                                if ($id == $id)
                                    $selecionado = "selected";
                                else
                                    $selecionado = "";

                                print "<option value = \"$id\" $selecionado > $registro[turno] </option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="Local">Local</label>
                    <div>
                        <select name="local" class="form-control" >
                            <option></option>
                            <?php
                            $sqllocal = "select * from local order by nome";
                            $resultlocal = mysql_query($sqllocal);



                            while ($registro = mysql_fetch_array($resultlocal)) {
                                $id = $registro["id"];

                                if ($id == $id)
                                    $selecionado = "selected";
                                else
                                    $selecionado = "";

                                print "<option value = \"$id\" $selecionado > $registro[nome] </option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                    <div class="col-md-6">
                        <label for="equipamento">Equipamento</label>
                    <div>
                        <select name="equipamento" class="form-control" >
                            <option></option>
                            <?php
                            $sqlequi = "select * from Equipamento where situacao = 'Disponivel' order by nome";
                            $resultequi = mysql_query($sqlequi);



                            while ($registro = mysql_fetch_array($resultequi)) {
                                $id = $registro["id"];

                                if ($id == $id)
                                    $selecionado = "selected";
                                else
                                    $selecionado = "";

                                print "<option value = \"$id\" $selecionado > $registro[nome] </option>";
                            }
                            ?>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="row">
                     <div class="col-md-6">
                        <label for="curso">Curso</label>
                    <select name="NomeCurso" class="form-control">
                        <option> </option>
                        <?php
                        $sqlcurso = "select * from curso order by NomeCurso";
                        $resultcurso = mysql_query($sqlcurso);



                        while ($registro = mysql_fetch_array($resultcurso)) {
                            $id = $registro["id"];

                            if ($id == $id)
                                $selecionado = "selected";
                            else
                                $selecionado = "";

                            print "<option value = \"$id\" $selecionado > $registro[NomeCurso] </option>";
                        }
                        ?>
                    </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-4">
                       <button class="btn btn-lg btn-primary btn-block button" type="submit" style="background: #4F94CD; width: 94%;">Salvar</button>   
                    </div>
                </div>
               
            </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>

