<?php
namespace app\models;
use app\core\Model;



class aulaAssistida extends Model {
		
	public function MarcarAulaAssistida($id_aula, $id_cliente, $id_curso){
		$sql = "INSERT INTO aula_assistida SET 
					id_aula 		= :id_aula,
					id_cliente 		= :id_cliente, 
					id_curso		= :id_curso,
					data_assistida	= :data,
					hora_assistida 	= :hora
				";
		$qry = $this->db->prepare($sql);
		$qry->bindValue(":id_aula", $id_aula );
		$qry->bindValue(":id_cliente", $id_cliente );
		$qry->bindValue(":id_curso", $id_curso);
		$qry->bindValue(":hora", date("H:i:s") );
		$qry->bindValue(":data", date("Y-m-d") );
		$qry->execute();
		
		return $this->db->lastInsertId();
		
		
		
		
	}

	public function getJaAssistiu($id_aula, $id_cliente){
		$sql = "SELECT * FROM aula_assistida WHERE id_aula = :id_aula AND id_cliente = :id_cliente";
		
		$qry = $this->db->prepare($sql);
		$qry->bindValue(":id_aula", $id_aula);
		$qry->bindValue(":id_cliente", $id_cliente);
		$qry->execute();
		return $qry->fetch(\PDO::FETCH_ASSOC);
		
		
	}
	
	public function listaAulasAssistidas($id_curso, $id_cliente) {
		$objAula = new Aula();
		$objAulaAssistida = new aulaAssistida();
		
		$aulas = $objAula->getAula($id_curso);
		
		$lista = array();
		if($aulas){
			foreach ($aulas as $aula){
			$assistiu = $objAulaAssistida->getJaAssistiu($aula["id_aula"], $id_cliente);
				if($assistiu){
						//verifica se ja foi assistida e adiciona os campos
					$data = $assistiu["data_assistida"];
					$hora = $assistiu["hora_assistida"];
					$assistido = true;				
				} else {
					$data = "0000-00-00";
					$hora = "00:00:00";
					$assistido = false;	
					
				}
				
				$lista[] = array(
					"id_aula" 		=> $aula["id_aula"],
					"id_curso" 		=> $aula["id_curso"],
					"aula" 			=> $aula["aula"],
					"duracao_aula" 	=> $aula["duracao_aula"],
					"embed_youtube" => $aula["embed_youtube"],
					"data"			=> $data,
					"hora"			=> $hora,
					"assistido" 	=> $assistido
				
				
				
				);
								
			}
		}	
		return $lista;
	}



}
?>