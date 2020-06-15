<?php
	
	try { //tente fazer algo	
	
		$conexao = new PDO("mysql:host=localhost; dbname=projetobd", "root", ""); //instancia a classe do PDO php, olhar na documentação do PDO
		$id = $_GET['id'];
	
		//quando recebe valor externo , faz isso
		//anti SQL injector
		$sql  = "select * from cliente where id_cliente = ? ";
		$stmt = $conexao -> prepare($sql);
		$stmt -> bindValue(1, $id); //passa o parametro de pesquisa do SQL
		$stmt -> execute();
		$linha = $stmt->fetchAll (PDO::FETCH_ASSOC);
		
		echo "<pre>";
		echo print_r($linha);
		
	} catch(PDOexception $e) {//mostra o tipo de erro, guarda na variavel $e
	
		echo "sistema apresentou um erro:" . $e->getCode();//se der algum erro entra nesse codigo
		
	}






?>