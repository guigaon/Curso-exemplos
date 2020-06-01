DML


Linguagem de Manipulação de Dados - é o subconjunto do SQL utilizado para manipular os dados Construidos pela DDL, usando as funcionalidades de inserir, alterar e excluir informações. Os seus comandos são:

-INSERT
	utilizado para inserir valores na tabela
	
-UPDATE
	utilizado para alterar valores de um ou mais registros de uma tabela
	
-DELETE
	utilizado para excluir um ou mais registros de tabelas
	
	
INSERINDO DADOS EM UMA TABELA
	para inserir dados em uma tabela, usamos o comando INSERT INTO, pode se especificar apenas um conjunto
	e nao todos. Nesse caso, os campos nao se encontra relacionados nao pode ter o modificador NOT NULL na definição
	
	SINTAXE1: sem especificar os nomes das colunas
	
	INSERT INTO nomeDaTabela
		VALUES (valor1, valor2, valor3...)
	
	INSERT INOT cliente
		VALUES (null, 'Manoel Jailton', 'Mjailton@gmail.com', 1234)
		(se eu nao expecificar, ele vai inserir de forma ordenada
		se as colunas forem: 
		id
		nome
		tabela
		senha
		se inserido de forma ordenada, por isso ID precisa ser especificado, mesmo que seja inserido por meio de um incremento)
		
	
	SINTAXE2: especificando os nomes das colunas
	
	INSERT INTO nomaDaTabela (coluna1, coluna2, coluna3)
		VALUES(valor1, valor2, valor3)
		
	INSERT INTO cliente(email, nome, senha)
		VALUES ('mjailton@gmail.com', 'Manoel', '1234')
		
		
		
ISERINDO DADOS EM UMA TABELA A PARTIR
	Para inserir dados em uma tabela a partir de outra utilizamos o comando INSERT em conjunto com o comando SELECT. Neste caso, estamos apenas copiando uma linha de tabela para outra.

SINTAXE1:
INSERT INTO nome_da_tabela	
	SELECT * FROM outra_tabela
	
SINTAXE2: especificando os nomes das colunas
	INSERT INTO nome_da_tabela (coluna1, coluna2, coluna3...)
	SELECT valor1, valor2, valor3,... FROM outra_tabela
	
	INSERT INTO cliente_temp (email, nome, senha)
	SELECT email, nome, senha FROM cliente
	(seleciona a tabela "cliente" e os campos como "email" e insere na tabela "cliente temp" nos campos citados)
