<?php
include ("../config.php");
?>
<html>
<head>
<title></title>
</head>
<body>


<?php
$login = $_POST['login'];
$senha = md5($_POST['senha']);

$sql = "SELECT * FROM USUARIO WHERE usuario = '$login' AND senha = '$senha'";

$retorno = mysql_query($sql, $mysql);
if (mysql_num_rows($retorno)>0){
	include("../views/adm/menu.php");

}else{
	header('Location: ../views/login.php?erro=1');

}
?>
</body>
</html>
<?php
mysql_close($mysql);
?>