<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Aula;
use app\models\aulaAssistida;


class AulaController extends Controller {
	
	public function index (){
		$dados["view"] = "Aula/index";
		$this->load("tamplate", $dados);
	}
	
	public function assistir ($id_aula){
		$objAula = new Aula();
		$objaulaAssistida = new aulaAssistida();
		$id_cliente = 1;
		
		$aula1 = $objAula->AssitirAula($id_aula);
		
		$objaulaAssistida->MarcarAulaAssistida($id_aula, $id_cliente, $aula1["id_curso"]);
		
		$dados["aula"] = $aula1;
		$dados["todas_aulas"] = $objAula->getAula($aula1["id_curso"]);
		$dados["view"] = "Aula/index";
		$this->load("tamplate", $dados);
	}
	
	
}





?>