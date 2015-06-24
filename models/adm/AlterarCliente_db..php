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
			$id       = $_POST['id'];
			$nome     = $_POST['nome'];
			$usuario = $_POST['usuario'];
			$senha = $_POST['senha'];
			$bloquado  = $_POST['bloqueado'];
			
			
			$sql = "UPDATE usuario SET nome = '$nome', usuario = '$usuario', senha = '$senha', bloqueado = '$bloquado' WHERE id = $id";
			
			mysql_query($sql, $mysql);
			?>
			<br/>
			<?php 
			if (mysql_affected_rows() > 0) {
				echo "Registro alterado com sucesso!";
			} else {
				echo "Não foi possível alterar este registro!";
			}
		?>
	</body>
</html>
<?php
	mysql_close($mysql);
?>







