<?php
include '../conexao.php';

\ob_start();
		//$socio = $_POST["socio"];
		//$id   = $_GET["id"];

//if ($acao != "")

	
	
		
	$data=date("d/m/Y");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
      <td width="99" rowspan="3"><img src="img/walle.png" width="272" height="84" /></td>
    <td colspan="2" align="right">Data de Impressão: <?php echo $data?></td>
  </tr>
  <tr>
    <td><h1> Relatório de Equipamentos - Walleti-FVS</h1></td>
    <td width="51" class="datarelatorio"></td>
  </tr>
  <tr>
    <td colspan="2">Rua Monsenhor Frota, 609. CEP: 63.430-000, Icó - CE. Fone: (88)3561-2760 / FAX: (88) 3561-2670</td>
  </tr>
</table>


</br>
</br>
<table class="table table-hover" width="100%" border="0">
  <tr>
    <td width="12%" align="left" valign="top">
     <strong>ID</strong> &nbsp;</td>
    <td width="29%"><strong>Nome</strong> &nbsp;</td>
    <td width="14%"><strong>Descrição</strong> &nbsp;</td>
    <td width="13%"><strong>Tombo</strong> &nbsp;</td>
    
    
  </tr>
  
<?php

	
		$sql="SELECT * from equipamento";
                $query = mysql_query($sql);
		
		while($resultado = mysql_fetch_array($query))
		{
			?>
  
  <tr>
    <td><?php echo $resultado['id'] ?></td>
    <td><?php echo $resultado['nome'] ?></td>
    <td><?php echo $resultado['descricao'] ?></td>
    <td><?php echo $resultado['tombo'] ?></td>
    <?php } ?>
</table>
	
	
	
	
		

</body>
</html>
<?php include("mpdf/mpdf.php");
$html = ob_get_clean();
$mpdf=new mPDF('c','A4','','',10,10,10,25,16,13); 
$mpdf->SetDisplayMode('fullpage');
$mpdf->list_indent_first_level = 0;	
//$stylesheet = file_get_contents('estilohome.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($date,2);	
$mpdf->WriteHTML($html,3);
$mpdf->Output('Relatório_de_Usuarios.pdf','I');
exit;
?>
