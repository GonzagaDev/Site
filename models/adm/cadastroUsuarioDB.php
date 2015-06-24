<?php
include('../../config.php');
?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<!--<?php include('menu.php'); ?>-->
<?php
$nome  = $_POST['nome'];
$login = $_POST['usuario'];
$senha = md5($_POST['senha']);


$sql = "INSERT INTO USUARIO VALUES (null, '$nome', '$login', '$senha','N')";

mysql_query($sql, $mysql);

if (mysql_insert_id() > 0) {
	echo "Registro adicionado com sucesso!";
} else {
	echo "Não foi possível adicionar este registro!";

}
?>
</body>
</html>
<?php
mysql_close($mysql);
?>
