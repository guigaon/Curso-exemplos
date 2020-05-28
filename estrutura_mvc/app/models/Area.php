<?php 

namespace app\models;
use app\core\Model;

class Area { //model se conecta ao banco de dados
	
	public function quadrado ($base){
		return $base * $base;
	}
	
	public function circulo ($raio){
		return pi() * $raio * $raio;
	}
	
	public function retangulo ($base, $altura){
		return $base * $altura;
	}
	
	public function triangulo ($base, $altura){
		return $base * $altura / 2;
	}
}

?>