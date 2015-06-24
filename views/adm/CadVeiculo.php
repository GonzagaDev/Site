<?php
include('../../config.php');
?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="../../CSS/notificacoes.css" />
</head>
<body>
<?php include('header.php'); ?>
	<form action="../../models/adm/cadastroUsuarioDB.php" method="post"
		class="frm_cadastro">

		<div class="Header-form">
			<button type="button" class="close" data-dismiss="" onclick=""
				aria-label="Close">
				<span aria-hidden="true">&times;</span>

			</button>
			<strong> Cadastro de Veiculo </strong>
		</div>
		<br /> <br /> <br /> <br /> <label>Descrição: </label><br /> <input
			type="text" name="descricao" maxlength="150"
			style="border: solid 1px white;; background-color: white;"><br /> <label>Placa:</label><br />
		<input type="text" name="placa" maxlength="100"
			style="border: solid 1px white;; background-color: white;"><br /> <br />
		<br /> <input type="submit" value="Cadastrar" />
		<div class="footer-form"></div>

	</form>
	<a href="menu.php"><img alt="Voltar" src="" style="color: red;" />

</body>
</html>
<?php
mysql_close($mysql);
?>