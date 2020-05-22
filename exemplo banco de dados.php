/*

DQL (Linguagem de Consulta de Dados) é o subconjunto da SQL utilizado para recuperar as informações inseridas no banco de dados pela DML ()
A DQL é formada basicamente pelo comando "SELECT"

DMl insere valores no SQL

SELECT é usada para selecionar o banco de dados
O resultado é armazenado em uma tabela, a qual chamamos de RESULTSET

EX: sintaxe1 (selecionando as colunas)
	SELECT coluna1, coluna2,coluna3 FROM tabela
	SELECT nome, email FROM cliente
	
EX: sintaxe2: mostrando todas as colunas
	SELECT * FROM tabela
	SELECT * FROM cliente 
	
EX: VALORES NAO DUPLICATOS
SELECT DISTINCT coluna1, coluna2... FROM tabela


OPERADORES PARA USAR NO WHERE
entre os padroes já existente (como o <= ou =), tem  
<>: Diferente, em alguns bancos de dados pode usar !=
BETWEEN: Entre (inclusive) EX: todos com idade entre 1 a 10 anos...
LIKE: procura um padrão, como: todos com letra A
IN: conjunto de valores

COMANDO WHERE
A cláusa WHERE é usada para extrair apenas os registros que cumprem um determinado critério
Pode usar com DELIT (DML)
UPDATE(DML)
SELECT

EX: SELECT coluna1, coluna2,coluna3 FROM tabela WHERE coluna_condicao operador valor[
(selecione as colunas da tabela que forem igual minha condição)

EX: SELECT * FROM cliente WHERE email = 'mjailton@gmail.com'
(seleciona todas as tabelas do cliente onde email for igual ao  'mjailton@gmail.com')

EX: SELECT * FROM cliente WHERE id_cliente >=50
(seleciona todas as tabelas de cliente com o id menor ou igual a 50)


OPERADOR AND
Mostra um registro somente se todas as condição for verdadeira

SINTAXE1:
SELECT coluna1, coluna2 FROM tabela WHERE condicao1 AND condicao2

SINTAXE2:
SELECT * FROM cliente
WHERE id_cliente > 100 AND nascimento <= '1980-05-01' AND cidade = 'sao luis'

OPERADOR OR 
MOSTRA O REGISTRO SE PELO MENOR UMA DAS CONDIÇOES FOREM VERDADEIRAS

OPERADOR AND e OR
SELECT * FROM tabela WHERE condicao1 AND (condicao2 OR condicao3)
se condicao1 e condicao2(ou 3) estiverem veradeiras, imprime os dois se nao nenhum

SELECT * FROM tabela WHERE condicao1 OR (condicao2 AND condicao3)
se condicao1 ou condicao2(ou 3) estiverem veradeiras, imprime os dois se nao, só a verdadeira


OPERADOR NOT ou !
SELECT * FROM cliente WHERE NOT (nascimento = '1977-05-20')
imprime quem nao tem esse nascimento


OPERADOR ORDER BY
É utilizada para classificar os resultados estabelecidos por uma determinada coluna, a palavra chave ORDER BY classifica os registros em ordem crescente (ASC) ou decrescente (DESC)

SELECT * FROM tabela ORDER BY coluna1, coluna2 ASC


OPERADOR LIKE 
O operador LIKE é usado em uma cláusula WHERE para procurar um determinado padrão de coluna. 
Com esse operador, pode usar alguns caracteres conhecidos como "coringa"

coringas
	Os curingas podem substituir um ou mais personagens na pesquisa de dados em um banco de dados.
Os principais são:
	- Curinga %
	- Curinga _
	- Curinga []

SELECT * FROM cliente WHERE nome LIKE pattern
(nao pode usar "=", LIKE já é um filtro)

Selecionar todos os clientes com a letra "a", ficaria LIKE 'a%'
todos que tenham a letra '%a%'

Curinga _
concide com qualquer caractere alfabético isolado (apenas no LIKE)
LIKE 'm_r_a' Maria, Marta
LIKE 'M_r_%' Maria, Murilo, Marcos, Marta

Curingda - 
Coincide com qualquer caractere que esteja no intervalo de caractere
LIKE 'm[a-i]%' Maria, Meire, miriam

Curingda !
Coincide com qualquer caractere que nao esteja no intervalo de caractere
Like 'M[!A-I]%' Mouro, Murilo, Monalisa


IN
Permite comparar o valor de uma coluna com um conjunto de valores. Normalmente, utilizamos IN para substituir uma serie de comparações seguidas da cláusula OR
SELECT * FROM cliente WHERE id_cliente IN (10,15,18)
(seleciona todos os IDs ou os verdadeiros)(utilizado em subquery)


IS NULL 
sabemos que todas as colunas que nao tem valor inicializado são nulas em um banco de dados. 
´Para saber se o conteudo de uma coluna foi ou nao inicializado usamos o IS NULL
SELECT * FROM tabeça WHERE coluna IS NULL
(imprime todos os campos onde 'coluna' é vazia)


IS NOT NULL
SELECIONA TODOS OS VALORES QUE NAO SÃO NULUS


BETWEEN
Seleciona um intervalo entre dois valores, geralmente utilizado para simplificador o uso do AND
SELECT * FFROM cliente WHERE nascimento >= '1977-04-01' AND nascimento <='2010-04-01'
SELECT * FFROM cliente WHERE nascimento BETWEEN '1977-04-01' AND '2010-04-01'

*/