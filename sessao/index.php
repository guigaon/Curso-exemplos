<?php 
session_start();
var_dump($_SESSION);?>

<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>Curso sessão</title>
	</head>
	<body>
			
			<form  method="post" action="login.php">
				Usuário:<input type="text" name="txtusuario"><br>
				Senha:<input type="text" name="txtsenha"><br>
				<input type="submit" value="logar">
			</form>
	</body>
</html>