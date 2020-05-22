<?php 

namespace app\controllers; //onde o arquivo está
use app\core\controller;
use app\models\Cantor;

class CantorController extends Controller{

	public function index (){
		objCantor = new Cantor ();
		$dados["lista"] = objCantor->listaCantor; //pega a lista de cantores e salva em "lista"
 		$dados["view"] = "Cantor/lista";
		$this->load("template" , $dados); 
		
		
	}
		
	public function listaCantor (){
		$objCantor = new Cantor ();
		
		$retorno = $objCantor ->listaCantor();
		foreach($retorno as $cantores){ //serve para percorrer o array e jogar os dados em um variavel, no caso "cantores"
			echo $cantores["id_cantor"] . " - " . $cantores["cantor"] . "<br>"; //Variavel "cantores" que recebeu o array, imprime apenas a coluna "cantor"
		
		
		//echo "<pre>";
		//return print_r ($cantores); //imprime formatado
			
		}
		
		
	
	}
	
	public function listaCategoria (){
		$objCategoria = new Cantor ();
		
		$retorno = $objCategoria ->listaCategoria();
		foreach($retorno as $categoria){ 
			echo $categoria["categoria"] . "<br>"; 
		
			
		}

	}

}
?>