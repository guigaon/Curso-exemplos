<?php
session_start();
if($_POST["txtusuario"] == "gui" && $_POST["txtsenha"] == "123") {
	$_SESSION["cliente"] = "gui"; 
	$_SESSION["senha"] = "123";
header("location:pagina1.php");	
} else {
	/*
	unset($_SESSION["cliente"]); 
	unset($_SESSION["senha"]);
	*/
	session_destroy();
	header("location:index.php");	//destroi a sessao e manda de volta para index
}




?>