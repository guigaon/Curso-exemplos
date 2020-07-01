<?php 
include ("DB.php");
include ("crudPDO.php");

$conn = DB::getInstance(); //metodo estatico, nao precisa instanciar e foi instanciado direto na função

$dados = array ("nome" => "gui", "email" => "gui@gmail.com", "fone" => "99999999");

print_r(alterar("cliente",$dados,"id_cliente = 2"));
?>