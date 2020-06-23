<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Clientecurso;
use app\models\login;

class meuscursosController extends Controller{
   

	public function __construct(){
		$objLogin 					= new Login();
		$this->id_cliente	 		= $objLogin->retornaIdCliente();
		if(!$this->id_cliente){
			header("location:" . URL_BASE . "login");
					
		}
		
		
	}
	
	public function index(){
	   $objLogin 		= new Login();
	   $objClienteCurso = new Clientecurso();
	   
	   $dados["lista_cursos"] = $objClienteCurso->listaCursoPorCliente($this->id_cliente);
	   
	   
       $dados["view"] = "meuscursos/index";
	   $this->load("tamplate", $dados);
	   
	} 
}





?>