<?php
namespace app\controllers;
use app\core\Controller;

class meuscursosController extends Controller {
	
	public function index (){
		$dados["view"] = "meuscursos/index";
		$this->load("tamplate", $dados);
	}
	
	
}





?>