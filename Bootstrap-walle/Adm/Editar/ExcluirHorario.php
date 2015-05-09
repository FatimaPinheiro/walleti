<?php 
include '../../conexao.php';
 $id = $_GET['id'];
$sql = "DELETE from horario WHERE id= '$id'";
$query = mysql_query($sql) or die("Houve um erro na gravação dos dados, verifique os valores passados");

header("location: ../listar/ListarCurso.php");?>

