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
	<form action="cadastrar_cliente_db.php" method="post"
		class="frm_cadastro">

		<div class="Header-form">
			<button type="button" class="close" data-dismiss=""
				aria-label="Close" >				
				<span aria-hidden="true">&times;</span>
				
			</button>
			<strong> Cadastro de Usuários </strong>
		</div>
		<br /> <br /> <br /> <br /> <label>Nome: </label><br /> <input
			type="text" name="nome" maxlength="150"
			style="border: solid 1px white;; background-color: white;"><br /> <label>Usuário:</label><br />
		<input type="text" name="usuario" maxlength="100"
			style="border: solid 1px white;; background-color: white;"><br /> <label>Senha:
		</label><br /> <input type="password" name="Senha" height="16"
			size="15" style="border: solid 1px white;; background-color: white;"
			maxlength="11" /> <br /> <br /> <input type="submit"
			value="Cadastrar" />
		<div class="footer-form"></div>
		<a href="menu.php"><img alt="Voltar" src="" />
	</form>
</body>
</html>
<?php
mysql_close($mysql);
?>