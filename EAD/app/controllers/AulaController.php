<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Aula;

class AulaController extends Controller {
	
	public function index (){
		$dados["view"] = "Aula/index";
		$this->load("tamplate", $dados);
	}
	
	public function assitir ($id_aula){
		$objAula = new Aula();
		
		
		$dados["aula"] = $objAula->aula1($id_aula);
		$dados["view"] = "Aula/index";
		$this->load("tamplate", $dados);
	}
	
	
}





?>