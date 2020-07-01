<?php


function inserir($tabela, array $dados){
	$conn = DB::getInstance()->getDb();
	
	$campos = implode("," , array_keys($dados)); //pega as chaves do array
	$valores = ":" . implode(", :" , array_keys($dados)); //pega os valores do array
	
	$sql = "INSERT INTO {$tabela} ({$campos}) VALUES ({$valores})";
	$stmt = $conn->prepare($sql);
	
	foreach($dados as $chave=>$valor){
		$tipo = ((is_int($valor)) ? PDO::PARAM_INT : PDO::PARAM_STR);
		$stmt->bindValue (":$chave", $valor, $tipo);	
		
	}
		
	if($stmt->execute()){
		return $conn->lastInsertId();
		
	}
	return false;
}

function alterar($tabela, $dados, $condicao){
	$parametros = null;
	
	foreach ($dados as $chave=>$valor){
		$parametros .= "$chave=:$chave,";
		
	}
	
	$parametros = rtrim($parametros, ",");//exclui o ultimo caracter, a virgula
	
	$sql = "UPDATE {$tabela} SET {$parametros} WHERE {$condicao}";
	
return $sql;
	
}


?>