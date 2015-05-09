<?php 
include '../../conexao.php';
 $idcurso = $_GET['idcurso'];
$sql = "DELETE from curso WHERE idcurso= '$idcurso'";
$query = mysql_query($sql) or die("Houve um erro na gravação dos dados, verifique os valores passados");

header("location: ../listar/ListarCurso.php");?>
