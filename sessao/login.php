<?php
session_start();
if($_POST["txtusuario"] == "gui" && $_POST["txtsenha"] == "123") {

echo "logado";
} else {
	echo "nao logado";
}




?>