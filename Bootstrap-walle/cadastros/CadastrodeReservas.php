<!DOCTYPE html>

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
            <form class="form-horizontal equipamento" method="post" action="../EnviarCadastroReserva.php">
                <div class="form-group">
                    <label for="data" class="col-sm-2 control-label">Data</label>
                    <div class="col-sm-10">
                        <input type="date" name="data" class="form-control" id="inputEmail3" style="width: 30%;">
                    </div>
                </div>
                <div class="form-group">
                    <label for="horario" class="col-sm-2 control-label">Horário</label>
                    <div class="col-sm-10">
                        <input type="time" name="horario" class="form-control" id="inputEmail3" style="width: 30%;">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Local" class="col-sm-2 control-label">Local</label>
                    <div class="col-sm-10">
                        <input type="text" name="local" class="form-control" id="inputEmail3" style="width: 70%;">
                    </div>
                </div>
                <div class="form-group">
                    <label for="equipamento" class="col-sm-2 control-label">Equipamento</label>
                    <div class="col-sm-10">
                        <input type="text" name="equipamento" class="form-control" id="inputEquipamento" style="width: 70%;">
                    </div>
                </div>
                <div class="form-group">
                    <label for="curso" class="col-sm-2 control-label">Curso</label>
                    <div class="col-sm-10">
                        <input type="text" name="curso" class="form-control" id="inputCurso" style="width: 70%;">
                    </div>
                </div>
                <div>
                    <button class="btn btn-lg btn-primary btn-block button" type="submit" style="background: #4F94CD; width: 20%; margin-right: 10px;">Salvar</button>
                    <button class="btn btn-lg btn-primary btn-block " type="submit" style="background: #4F94CD; width: 20%;">Excluir</button>
                </div>
            </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>

