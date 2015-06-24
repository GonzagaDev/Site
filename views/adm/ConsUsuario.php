<?php
include('../../config.php');
?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php include 'header.php'; ?>
	<h1>Consulta de Usuários</h1>
	<br />
	<br />
	<a href="cadUser.php" style="margin-left: 20%;">Cadastrar</a>
	<br />
	<?php
	$sql = 'SELECT id, nome, usuario, bloqueado FROM usuario';
	$retorno = mysql_query($sql, $mysql);
	?>

	<table style="margin-left: 20%; width: 780px; border: 0px;">
		<tr style="background-color: grey;">
			<th>Código</th>
			<th>Nome</th>
			<th>Login</th>
			<th>Bloqueado</th>
			<th></th>
			<th></th>
		</tr>
		<?php
		while ($obj = mysql_fetch_array($retorno)) {
			?>
		<tr style="background-color: white;">
			<td><?php echo $obj['id']; ?></td>
			<td><?php echo $obj['nome']; ?></td>
			<td><?php echo $obj['usuario']; ?></td>
			<td><?php echo $obj['bloqueado']; ?></td>
			<td><a href="AlterarUsuario.php?id=<?php echo $obj['id']; ?>">Alterar</a>
			</td>
			<td><a
				href="../../models/adm/ExcluirUser.php?id=<?php echo $obj['id']; ?>">Excluir</a>
			</td>
		</tr>
		<?php
		}
		?>

	</table>

	<div id="DivResumo"
		style="background-color: grey; margin-left: 20%; margin-bottom: 10%; width: 780px; border: 0px;">
		Exite(m)
		<?php
		echo mysql_num_rows($retorno);
		?>
		registro(s)
	</div>
</body>
</html>
		<?php
		mysql_close($mysql);
		?>