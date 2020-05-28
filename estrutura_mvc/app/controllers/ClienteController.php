<?php 
namespace app\controllers;
use app\core\Controller;

class ClienteController extends Controller {
		
		public function index (){
			$dados["view"] = "lista";
			$this->load("tamplate", $dados); // se nao houver nenhum arquivo ou nao achar, abre o "tamplate" e um array
			
		}
		
		public function cadastro (){
			$dados["view"] = "cadastro";
			$this->load("tamplate", $dados); // se nao houver nenhum arquivo ou nao achar, abre o "tamplate" e um array
			
		}
	
	
}