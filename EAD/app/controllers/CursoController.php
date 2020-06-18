<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Curso;
use app\models\Aula;
use app\models\aulaAssistida;


class CursoController extends Controller {
	
	public function index (){
		$dados["view"] = "Curso/index";
		$this->load("tamplate", $dados);
	}
	
	public function detalhes ($id_curso){
		$objCurso 			= new Curso();
		$objAula			= new Aula();
		$objAulaAssistidas	= new aulaAssistida();
		$id_cliente 		= 1;
		
		
		
		$dados["curso"] = $objCurso->getCurso($id_curso);
		$dados["aulas"] = $objAulaAssistidas->listaAulasAssistidas($id_curso, $id_cliente);
		$dados["view"]	= "Curso/index";
		$this->load("tamplate", $dados);
	}
	
	
	
	
}





?>