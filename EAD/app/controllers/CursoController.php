<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Curso;

class CursoController extends Controller {
	
	public function index (){
		$dados["view"] = "Curso/index";
		$this->load("tamplate", $dados);
	}
	
	public function detalhes ($id_curso){
		$objCurso 		= new Curso();
		
		$dados["curso"] = $objCurso->getCurso(id_curso);
		$dados["view"]	= "Curso/index";
		$this->load("tamplate", $dados);
	}
	
}





?>