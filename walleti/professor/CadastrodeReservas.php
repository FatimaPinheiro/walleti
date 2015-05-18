<!DOCTYPE html>
<?php
include '../conexao.php';
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro de Reservas</title>
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
                    <li class="active">Cadastro de Reserva</li>
                </ol>   
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">Cadastro de Reserva</div>
                <div class="panel-body">
                    <button type="submit" class="btn btn-primary"><a href="ListarReserva.php">Listar Reservas</a></button>
                    <p>
                    <form class="form-horizontal" method="post" action="EnviarCadastroReserva.php">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="usuario_id">Usuário</label>
                                <select name = "usuario_id" class="form-control">
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

                            <div class="col-md-3">
                                <label for="data_reserva">Data</label>
                                <div>
                                    <input type="date" name="data_reserva" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="horario_id">Horário</label>
                                <select name="horario_id" class="form-control">
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
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <label for="turno_id">Turno</label>
                                <div>
                                    <select name="turno_id" class="form-control" >
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
                            <div class="col-md-5">
                                <label for="local_id">Local</label>
                                <div>
                                    <select name="local_id" class="form-control" >
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
                        </div>
                        <div class="row">                      
                            <div class="col-md-5">
                                <label for="equipamento_id">Equipamento</label>
                                <div>
                                    <select name="equipamento_id" class="form-control" >
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
                            <div class="col-md-5">
                                <label for="curso_idcurso">Curso</label>
                                <select name="curso_idcurso" class="form-control">
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
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>
                        <div class="row">
                            
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

