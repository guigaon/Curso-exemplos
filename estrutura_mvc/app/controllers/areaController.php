<?php 
namespace app\controllers;
use app\core\Controller;
use app\models\Area;

class AreaController extends Controller {
		
		public function index (){
			$dados["figura"] = null;
			$dados["view"] = "formas";
			$this->load("tamplate", $dados); // se nao houver nenhum arquivo ou nao achar, abre o "tamplate" e um array
			
		}
		
		public function calcula (){
			$objArea = new Area();
			$area = null;
			$figura = $_POST["figura"];
			$base   = $_POST["base"];
			$altura = $_POST["altura"]; 
			$raio   = $_POST["raio"];
			
	
			if($figura=="quadrado"){
				$area = $objArea->quadrado($base);
			}else if($figura=="triangulo"){
				$area = $objArea->triangulo($base, $altura);
			}else if($figura=="circulo"){
				$area = $objArea->circulo($raio);
			}else if($figura=="retangulo"){
				$area = $objArea->retangulo($base, $altura);
			}else {
				$area = 0;
			}
			
			$dados["figura"] = $figura;
			$dados["base"]   = $base;
			$dados["altura"] = $altura;
			$dados["raio"]   = $raio;
			$dados["area"]   = $area;
			$dados["view"]   = "formas";
			$this->load("tamplate", $dados);
			
		}
	
	
}