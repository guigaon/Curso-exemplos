<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Clientecurso;
use app\models\Login;

class HomeController extends Controller{
    
	public function __construct(){
		$objLogin 					= new Login();
		$this->id_cliente	 		= $objLogin->retornaIdCliente();
		if(!$this->id_cliente){
			header("location:" . URL_BASE . "login");
					
		}
		
		
	}
	
   public function index(){
	   $objClienteCurso = new Clientecurso();
	   
	   
	   $dados["lista_cursos"] = $objClienteCurso->listaCursoPorCliente($this->id_cliente); 
       $dados["view"] = "home";
	   $this->load("tamplate", $dados);
   } 
}
