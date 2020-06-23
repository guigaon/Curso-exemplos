<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Curso;
use app\models\Aula;
use app\models\aulaAssistida;
use app\models\login;


class CursoController extends Controller {
	
	public function __construct(){
		$objLogin 					= new Login();
		$this->id_cliente	 		= $objLogin->retornaIdCliente();
		if(!$this->id_cliente){
			header("location:" . URL_BASE . "login");
					
		}
		
		
	}
	
	public function index (){
		$dados["view"] = "Curso/index";
		$this->load("tamplate", $dados);

	}
	
	public function detalhes ($id_curso){
		$objCurso 			= new Curso();
		$objAula			= new Aula();
		$objAulaAssistidas	= new aulaAssistida();

		
		$dados["curso"] = $objCurso->getCurso($id_curso);
		$dados["aulas"] = $objAulaAssistidas->listaAulasAssistidas($id_curso, $this->id_cliente);
		$dados["view"]	= "Curso/index";
		$this->load("tamplate", $dados);
	}
	
	
	
	
}





?>