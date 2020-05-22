<?php 

namespace app\models;
use app\core\Model; //conecta com o banco de dados


class Cantor extends Model { // "Model" conecta com o banco de dados

	public function listaCantor (){
		$sql = "SELECT * FROM cantor";
		$qry = $this->db->query($sql); //migra a coneção do Model.php, query executa a funcao do banco de dados
		
		
		return $qry->fetchAll(\PDO::FETCH_ASSOC); //como tem mais de um resultado, quarda os resultados array, (Esse PDO retorna uma matriz indexada pelo nome da coluna(só tirar e testar pra ver como fica))
		
	}
	
	public function listaCategoria (){
		$sql = "SELECT * FROM categoria";
		$qry = $this->db->query($sql); //migra a coneção do Model.php, query executa a funcao do banco de dados
		
		
		return $qry->fetchAll(\PDO::FETCH_ASSOC); //como tem mais de um resultado, quarda os resultados array, (Esse PDO retorna uma matriz indexada pelo nome da coluna(só tirar e testar pra ver como fica))
		
	}


}





?>