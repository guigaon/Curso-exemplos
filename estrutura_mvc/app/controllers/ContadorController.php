<?php

namespace app\controllers;
use app\models\Contador;

class ContadorController {
    
	Public function index (){
		echo "contador";
	}
	
	Public function assinatura ($sala, $nome){ //instancia a funcao do Model "contador"
		$objContador = new Contador();
		
		echo $objContador->assinar($sala, $nome); 
		//chamar um model e o model faz a assinatura
	}
	
	public function lista($sala){
		$objContador = new Contador();
		
		$contadores = $objContador->lista($sala);
		
		echo "<h1>Lista de contadores</h1><hr>" . $contadores;
		
	}
	
	public function inserir($contador, $sala){
		$objContador = new Contador();
		
		$lista = $objContador->inserir($contador, $sala);
		
		echo "<h1>Lista de contadores</h1><hr>" . $lista;
		
	}
	
	public function lista(){
		$objContador = new Contador();
		$contadores = objContador ->lista;
		
		
		echo $contadores;
	}
	
	
	
}