<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
<title>..: Login - Location :..</title>
<link rel="stylesheet" type="text/css" href="../CSS/CSS_login.css" />
<link rel="stylesheet" type="text/css" href="../CSS/notificacoes.css" />
</head>
<script language="JavaScript">
		//	setTimeout("document.location = 'login.php'",2000);
		</script>
<body>
	<div id="cab">
		<a href="../index.php"><img alt="" src="../imagens/seta.png" /> </a>
		<h1>Acesso a Area Restrita</h1>
	</div>
	<script language="JavaScript">
					if ("document.location = 'login.php?erro=1'"){
						</script>
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert"
			aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		OPS! Usuário ou senha </a> <strong> Inválidos. </strong>
	</div>
	<script type="text/javascript">

					}        	
    </script>
	<fieldset>
		<br /> <br /> <br />
		<form action="../models/login_db.php" method="post">
			<label for="nome">UsuÃ¡rio</label><br /> <input type="text"
				name="login" id="login" /><br /> <label for="senha">Senha</label><br />
			<input type="password" name="senha" id="senha" /><br /> <br /> <input
				type="submit" name="acessar" value="Acessar" id="acessar" />
			<?php
				if ('Location = login.php?erro=1'){
					//echo "Deu certo!";

				}
				?>


		</form>
	</fieldset>
</body>
</html>
