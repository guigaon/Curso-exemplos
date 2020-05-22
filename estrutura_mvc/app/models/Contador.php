<?php 

namespace app\models;
use app\core\Model;

class Contador { //model se conecta ao banco de dados
	
	public function assinar ($sala, $nome){
		$resultado = "documento assinado por: " . $nome .  " que trabalha na sala " . $sala;
		return $resultado;
		
	}
	
	public function lista($sala){
		$lista = "
			01 - Gui<br>
			02 - jairo<br>
				";
		return $lista;
	}
	
	public function inserir ($contador, $sala){
		$lst= $this->lista($sala) . $contador;
		
		return $lst;
		
	}
	
	public function lista(){
		$sql = "recebe dados do banco de dados";
		
		return $sql;
	}
	
}

?>