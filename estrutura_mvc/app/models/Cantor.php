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
	
	public function pesquisa ($letra){ //pega o nome do cantor conforme a letra inicial digitada, por parametro no Controller
		$sql = "SELECT * FROM cantor WHERE cantor like '$letra%'";
		$qry = $this->db->query($sql); 		
		
		return $qry->fetchAll(\PDO::FETCH_ASSOC); 
		
	}
	//com segurança ao SQL injector
	public function inserir ($nome){ 
		$sql = "INSERT INTO cantor SET cantor = :cantor"; //recebe de um parametro "cantor"
		$qry = $this->db->prepare($sql); 	//prepara os dados
		$qry-> bindValue(":cantor", $nome); //substitui o parametro cantor por $nome
		$qry->execute();
		
		return $this->db->lastInsertId(); //metodo que retorna o ultimo ID inserido 
		
	}
	
	
	//sem segurança do SQL injector
	/*public function inserir ($nome){ 
		$sql = "INSERT INTO cantor SET cantor = '$nome'";
		$qry = $this->db->query($sql); 		
		
		return $this->db->lastInsertId(); //metodo que retorna o ultimo ID inserido 
		
	}*/


}





?>