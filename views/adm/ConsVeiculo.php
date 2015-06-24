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
<h1>Consulta de Veículos</h1>
	<br />
	<br />
	<a href="cadUser.php" style="margin-left: 20%;">Cadastrar</a>
	<br />
	<?php
	$sql = 'SELECT id, descricao, placa FROM veiculo';
	$retorno = mysql_query($sql, $mysql);
	?>

	<table style="margin-left: 20%; width: 780px; border: 0px;">
		<tr style="background-color: grey;">
			<th>Código</th>
			<th>Descrição</th>
			<th>Veiculo</th>
			<th></th>
			<th></th>
		</tr>
		<?php
		while ($obj = mysql_fetch_array($retorno)) {
			?>
		<tr style="background-color: white;">
			<td><?php echo $obj['id']; ?></td>
			<td><?php echo $obj['descricao']; ?></td>
			<td><?php echo $obj['placa']; ?></td>
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