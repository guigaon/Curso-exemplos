<?php 

namespace app\controllers; //onde o arquivo está
use app\core\controller;
use app\models\Cantor;

class CantorController extends Controller{

	public function index (){
		$objCantor 				= new Cantor ();
		
		$dados["cantores"]	= $objCantor->listaCantor(); //pega a lista de cantores e salva em "lista"
		
		//$dados["cantores"] 		= $objCantor->pesquisa("d"); //recebe a letra por parametro
 		
		$dados["view"] 			= "Cantor/lista"; //chama a view lista
		
		$this->load("tamplate" , $dados); 
		
		
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
	
	public function inserir (){
		$objInserir = new Cantor ();
		$cantor = $_POST["nome"]; //recebe nome de "create.php"
		
		$id = $objInserir->inserir($cantor);
		header ("location:" . URL_BASE . "cantor");
		
		
	}
	
	public function criar (){
		$dados["view"] = "Cantor/criar";
		$this->load("tamplate", $dados);
		
	}
	
	/*public function editar (){
		$dados["view"] = "Cantor/editar";
		$this->load("tamplate", $dados);
		
	}
	
	public function excluir (){
		$dados["view"] = "Cantor/criar";
		$this->load("tamplate", $dados);
		
		//SEM VIEW, PORTANTO SEM FORMULARIO
		
		
	}*/

}
?>