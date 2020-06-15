<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Clientecurso;

class meuscursosController extends Controller{
    
   public function index(){
	   $objClienteCurso = new Clientecurso();
	   $id_cliente = 1;
	   
	   $dados["lista_cursos"] = $objClienteCurso->listaCursoPorCliente($id_cliente);
	   
	   
       $dados["view"] = "meuscursos/index";
	   $this->load("tamplate", $dados);
   } 
}





?>