<?php
namespace app\controllers;
use app\core\Controller;
use app\models\login;

class PerfilController extends Controller {
	
	public function __construct(){
		$objLogin 					= new Login();
		$this->id_cliente	 		= $objLogin->retornaIdCliente();
		if(!$this->id_cliente){
			header("location:" . URL_BASE . "login");
					
		}
		
		
	}
	
	public function index (){
		$dados["view"] = "Perfil/index";
		$this->load("tamplate", $dados);
	}
	
	
}





?>