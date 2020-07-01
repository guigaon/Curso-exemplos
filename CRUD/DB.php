<?php

require_once "config.php";

class DB{
	private static $db = null;
	private static $pdo;
	
	final private function __construct(){
		try {
			self::getDb();
			
		}catch (Exception $ex){
			$ex->getMessage();
			
		}
	
	}
	
	//se db ja tiver algum valor , nao acontece nada, se nao tiver, chama o construtor pelo self
	public static function getInstance(){
		if(self::$db==null){
			self::$db = new self(); //"self" chama o construtor da classe
			//instancia aqui, nao precisa instanciar novamente
		}
		
		return self::$db;
	}
	
	//cria uma nova instancia do $pdo
	public function getDb(){
		if(self::$pdo==null){ //quando é estatico, tem que chamar com "self"
				self::$pdo = new PDO ("mysql:dbname=" . BANCO . ";host=" . SERVIDOR,
									USUARIO, SENHA, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
			
		}
		
	return self::$pdo;
		
	}
	
	
}


?>