<?php

session_start(); // Inicia a session

include "conexao.php";

$usuario = $_POST['email'];
$senha = $_POST['senha'];

if ((!$usuario) || (!$senha)){

echo "<script>alert('Todos os campos devem ser preenchidos');</script>";

include "login.html";

}else{

//$senha = md5($senha);

$sql = mysql_query(

"SELECT * FROM usuario
WHERE email='{$usuario}'
AND senha='{$senha}'"

);

$login_check = mysql_num_rows($sql);

if ($login_check > 0){

while ($row = mysql_fetch_array($sql)){

foreach ($row AS $key => $val){

$$key = stripslashes( $val );

}

$_SESSION['id'] = $id_socio;
$_SESSION['nome'] = $nome;
$_SESSION['CPF'] = $cpf;
$_SESSION['email'] = $email;
$_SESSION['nivel'] = $nivel;
$_SESSION["logado"] = TRUE;
mysql_query(

//"UPDATE socios SET data_ultimo_login = now()
//WHERE id_socio ='{$id_socio}'"

);

header("Location: area_restrita.php");

}

}else{

//echo "Você não pode logar-se! Este usuário e/ou senha não são válidos!<br />
//Por favor tente novamente!<br />";


echo "<script>alert('Este usuário ou senha não existe!');</script>";
include "login.html";





}

}

?>