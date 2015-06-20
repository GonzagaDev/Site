<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
            $login = $_POST['login'];
            $_senha = md5($_POST['senha']);

            $sql = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";
            
            $retorno = mysql_query($sql, $mysql);

            if (mysql_num_rows($retorno)>0){
                    include("menu.php");
                
            }else{
        ?>
            <a href="index.php">Voltar</a>
        <?php
            }
        ?>
    </body>
</html>
<?php
    mysql_close($mysql);
?>