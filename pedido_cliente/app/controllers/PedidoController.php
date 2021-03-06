<?php
namespace app\controllers;

use app\core\Controller;
use app\models\service\Service;
use app\core\Flash;
use app\models\service\pedidoService;

class pedidoController extends Controller{
   private $tabela = "pedido";
   private $campo  = "id_pedido";
   
    public function index(){
       $dados["lista"] = Service::lista($this->tabela); 
       $dados["view"]  = "pedido/Index";
       $this->load("template", $dados);
    }
    
    public function create(){
        $dados["pedido"] = Flash::getForm();
        $dados["view"] = "pedido/Create";
        $this->load("template", $dados);
    }
    
    public function edit($id){
        $pedido = Service::get($this->tabela, $this->campo, $id);       
        if(!$pedido){
            $this->redirect(URL_BASE."pedido");
        }
        
        $dados["pedido"]   = $pedido;
        $dados["view"]      = "pedido/Create";
        $this->load("template", $dados);
    }
    
    public function salvar(){
        $pedido = new \stdClass();
        $pedido->id_pedido        = $_POST["id_pedido"];
        $pedido->pedido 		    = $_POST['pedido'];
        $pedido->endereco 		    = $_POST['endereco'];
        $pedido->complemento 		= $_POST['complemento'];
        $pedido->numero 			= $_POST['numero'];
        $pedido->bairro 			= $_POST['bairro'];
        $pedido->cidade 			= $_POST['cidade'];
        $pedido->uf 		        = $_POST['uf'];
        $pedido->cep		        = $_POST['cep'];
        $pedido->celular	        = $_POST['celular'];
        $pedido->cpf 			    = $_POST['cpf'];
        $pedido->sexo		        = $_POST['sexo'];
        $pedido->email		        = $_POST['email'];
        $pedido->senha		        = $_POST['senha'];
        $pedido->data_cadastro		= date("Y-m-d");
        
        Flash::setForm($pedido);
        if(pedidoService::salvar($pedido, $this->campo, $this->tabela)){
            $this->redirect(URL_BASE."pedido");
        }else{
            if(!$pedido->id_pedido){
                $this->redirect(URL_BASE."pedido/create");
            }else{
                $this->redirect(URL_BASE."pedido/edit/".$pedido->id_pedido);
            }
        }
    }
    
    public function excluir($id){
        Service::excluir($this->tabela, $this->campo, $id);
        $this->redirect(URL_BASE."pedido");
    }
}

