<?php 
namespace app\controllers;
use app\core\Controller;

class AreaController extends Controller {
		
		public function index (){
			$dados["view"] = "formas";
			$this->load("tamplate", $dados); // se nao houver nenhum arquivo ou nao achar, abre o "tamplate" e um array
			
		}
	
	
}