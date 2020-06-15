<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Clientecurso;

class HomeController extends Controller{
    
   public function index(){
	   $objClienteCurso = new Clientecurso();
	   $id_cliente = 1;
	   
	   $dados["lista_cursos"] = $objClienteCurso->listaCursoPorCliente($id_cliente);
	   
	   
       $dados["view"] = "home";
	   $this->load("tamplate", $dados);
   } 
}
