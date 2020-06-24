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
			$_SESSION[SESSION_LOGIN] = $cliente; //Refefini a SESSION em config.php
			header("location:" . URL_BASE);	
		}else{	
			unset($_SESSION[SESSION_LOGIN]);
			echo"cliente não encontrado";
		}
		
		
		
	}
	
	public function logoff(){
		unset($_SESSION[SESSION_LOGIN]);
		header("location:" . URL_BASE);	
	}
	
	
	
	
	
	
	
	
	
	
	
	
}





?>