<?php
namespace app\controllers;
use app\core\Controller;
use app\models\login;

class LoginController extends Controller {
	
	public function index(){
		$dados["view"] = "login";
		$this->load("login", $dados);
		
		
	}
	
	public function logar(){
		$objLogin = new login();
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		
		$cliente = $objLogin->logar($email, $senha);
		
		if($cliente){
			$_SESSION["clienteLogado"] = $cliente;
			header("location:" . URL_BASE);	
		}else{	
			unset($_SESSION["clienteLogado"]);
			echo"cliente não encontrado";
		}
		
		
		
	}
	
	
	
	
}





?>