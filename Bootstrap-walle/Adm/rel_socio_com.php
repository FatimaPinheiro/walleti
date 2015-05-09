<?php
include 'conexao.php';
ob_start();
		//$socio = $_POST["socio"];
		//$id   = $_GET["id"];

//if ($acao != "")

	
	
		
	$data=date("d/m/Y");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="estilohome.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="estilohome.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>

<body>

<hr />
<table width="800" border="0" class="table table-hover">
  <tr>
    <td width="99" rowspan="3"><img src="img/verdechapada.png" width="272" height="84" /></td>
    <td colspan="2" align="right">Data de Impressão: <?php echo $data?></td>
  </tr>
  <tr>
    <td><h1> Relatório de Sócios - UPECI</h1></td>
    <td width="51" class="datarelatorio"></td>
  </tr>
  <tr>
    <td colspan="2">Engenheiro Wilton Correa Lima n° 121 - Bairro: Prado - Iguatu - CE</td>
  </tr>
</table>


</br>
</br>
<table class="table table-hover" width="100%" border="0">
  <tr>
    <td width="12%" align="left" valign="top">
     <strong>Usuário</strong> &nbsp;</td>
    <td width="29%"><strong>nome</strong></td>
    <td width="14%"><strong>email</strong></td>
    <td width="13%"><strong>cpf</strong></td>
    
    
  </tr>
  
<?php

	
		$sql="SELECT * from usuario where nome = $nome";
                $query = mysql_query($sql);
		
		while($resultado = mysql_fetch_array($query))
		{
			?>
  
  <tr>
    <td><?php echo $resultado[senha] ?></td>
    <td><?php echo $resultado[nome] ?></td>
    <td><?php echo $resultado[email] ?></td>
    <td><?php echo $resultado[cpf] ?></td>
    <?php } ?>
</table>
	
	
	
	
		

</body>
</html>
<?php include("mpdf/mpdf.php");
$html = ob_get_clean();
$mpdf=new mPDF('c','A4','','',10,10,10,25,16,13); 
$mpdf->SetDisplayMode('fullpage');
$mpdf->list_indent_first_level = 0;	
$stylesheet = file_get_contents('estilohome.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($date,2);	
$mpdf->WriteHTML($html,3);
$mpdf->Output('relatorio_individual_socios.pdf','I');
exit;
?>
