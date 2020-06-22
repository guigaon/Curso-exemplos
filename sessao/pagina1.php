<?php session_start() ;
if(!$_SESSION["cliente"]){
	header("location:index.php"); //manda de volta para o index
}

?>


<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>Curso sessão</title>
	</head>
	<body>
			
				
				<?php echo @$_SESSION["cliente"]?>
				<p><a href="pagina2.php"> ir para pagina 2
	
	</body>
</html>