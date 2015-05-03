<?php 
include '../conexao.php';
 $id = $_GET['id'];
$sql = "DELETE from usuario WHERE id= '$id'";
$query = mysql_query($sql) or die("Houve um erro na gravação dos dados, verifique os valores passados");

   
    header("location: ../listar/ListarUsuario.php");?>