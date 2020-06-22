<?php
namespace app\controllers;
use app\core\Controller;

class LoginController extends Controller {
	
	public function index(){
		$dados["view"] = "login";
		$this->load("login", $dados);
		
		
	}
	
	public function logar(){
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		
		echo "email:" . $email;
		
		
	}
	
	
	
	
}





?>