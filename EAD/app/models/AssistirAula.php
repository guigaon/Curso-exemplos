<?php
namespace app\models;
use app\core\Model;



class AssistirAula extends Model {
	public function getCurso($id_aula){
		$sql = "INSERT INTO aula_assistida VALUES (1) ";
		
		$qry = $this->db->prepare($sql);
		$qry->bindValue(":id_aula", $id_aula);
		$qry->execute();
		return $qry->fetchAll(\PDO::FETCH_ASSOC);
		
		
	}
	
	
	
	
}




?>