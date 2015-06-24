<html>
<head>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>..: Menu - Location :..</title>
<link rel="stylesheet" type="text/css" href="../../CSS/CSS_login.css" />
</head>
<body>
	<div id="cab">
		<a href="../../index.php"><img alt="" src="../../imagens/seta.png" />
		</a>
		<h1>Menu Administrativo</h1>
		<div class="DivAvatar">
			<p>
			<?php 
			session_start();
			echo "Bem-Vindo, ".$_SESSION['nome'];
			?>
			</p>
			<div>
				<img id="avatar" alt="avatar" src="../../Imagens/adm/avatar.jpg"
					width="60" height="40">
			</div>

		</div>

</body>
</html>
