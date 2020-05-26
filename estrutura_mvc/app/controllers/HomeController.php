<?php
//Sempre com as primeiras letras maiusculas
//tem o nome do banco de dados

namespace app\controllers;
use app\core\Controller;

class HomeController extends Controller{
    
   public function index(){
	   $dados["view"] = "home";
       $this -> load("tamplate", $dados);
   } 
}
