<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Aula;
use app\models\aulaAssistida;
use app\models\login;


class AulaController extends Controller {		
	
	public function __construct(){
		$objLogin 					= new Login();
		$this->id_cliente	 		= $objLogin->retornaIdCliente();
		if(!$this->id_cliente){
			header("location:" . URL_BASE . "login");
					
		}
		
		
	}
	
	public function index (){
		$dados["view"] = "Aula/index";
		$this->load("tamplate", $dados);

	}
	
	public function assistir ($id_aula){
		$objAula 		  = new Aula();
		$objaulaAssistida = new aulaAssistida();
		
		$aula1 = $objAula->AssitirAula($id_aula);
		
		//se a aula ja for vista, nao insere no banco de dados novamente
		if(!$objaulaAssistida->getJaAssistiu($id_aula, $this->id_cliente)) {
			$objaulaAssistida->MarcarAulaAssistida($id_aula, $this->id_cliente, $aula1["id_curso"]);
		}
		
		$dados["aula"] 	= $aula1;
		$dados["aulas"] = $objaulaAssistida->listaAulasAssistidas($aula1["id_curso"], $this->id_cliente);

		$dados["view"] 	= "Aula/index";
		$this->load("tamplate", $dados);
	}
	
	
	
	
	
}





?>