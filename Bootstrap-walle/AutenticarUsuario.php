<?php

include "conexao.php";
?>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function loginsuccessfully(){
		setTimeout("window.location='principal.php'");
 
}
	function loginfailed(){
	setTimeout("window.location='index.php'");
}
</script>
</head>
<body>
<?php
$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = mysql_query("SELECT * FROM usuario WHERE email = '$email'AND senha = '$senha'") or die (mysql_error());

$row = mysql_num_rows($sql);

if($row > 0 ){
	session_start();
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['senha'] = $_POST['senha'];

	echo"<center>Logado com sucesso Aquarde!</center>";  
	echo"<script>loginsuccessfully()</script>";
}else{
	echo"<center>Login ou senha incorreto! Por favor digite novamente!</center>";
	echo"<script>loginfailed()</script>";

}

?>


</body>
</html>
