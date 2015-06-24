<?php
include('../../config.php');
?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php include('../../views/adm/header.php'); ?>
<?php
$id = $_GET['id'];

$sql = "DELETE FROM usuario WHERE id = $id";

mysql_query($sql, $mysql);
 ?>
 <br/>
 <?php 

if (mysql_affected_rows() > 0) {
	echo "Registro excluido com sucesso!";
} else {
	echo "Não foi possível excluir este registro!";
}
?>
</body>
</html>
<?php
mysql_close($mysql);
?>



