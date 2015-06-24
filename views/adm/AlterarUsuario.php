<?php
include('../../config.php');
?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php include('header.php'); ?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM usuario WHERE id = '$id'";
$retorno = mysql_query($sql, $mysql);
$obj = mysql_fetch_array($retorno);




?>

	<form action="../../models/adm/AlterarCliente_db..php" method="post"
		style="margin-top: 5%; margin-left: 5%;">
		<input type="hidden" name="id" value="<?php echo $obj['id']; ?>">
		Nome:<br /> <input type="text" name="nome" maxlength="150"
			value="<?php echo $obj['nome']; ?>"><br /> Login:<br /> <input
			type="text" name="usuario" maxlength="100"
			value="<?php echo $obj['usuario']; ?>"> <br /> Senha:<br /> <input
			type="password" name="senha" maxlength="11"
			value="<?php echo $obj['senha']; ?>"> <br /> Bloqueado:<br /> <input
			type="text" name="bloqueado" maxlength="1" 
			value="<?php echo $obj['bloqueado']; ?>"> <br /> <br/>
			<input type="checkbox" value="S"><br/>
			<input type="submit"
			value="Alterar" />
	</form>
	<a href="menu.php" style="color: red;">Voltar</a>
</body>
</html>
<?php
mysql_close($mysql);
?>