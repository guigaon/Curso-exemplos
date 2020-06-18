<?php
MODELAGEM DE DADOS
	A modelagem de dados é a primeira etapa de um projeto que envolva banco de dados e tem como seu principal objetivo o desenvolvimento de um modelo que 
	contenha entidades e relacionamentos, e que com isso seja possivel representar as especificações das informações do negócio

	Ajuda a organizar a forma de pensamento sobre os dados, demonstrando o significado e a aplicação pratica deles. Ela também estabelece o vínculo entre
	as necessidades dos usuários e a solução de software que as atende. Essa modelagem faz com que se tenha uma redução na complexidade do projeto a um
	ponto que o projetista possa compreender e manipular os dados
	
MODELO CONCEITUAL
	Representa e/ou descreve a realidade do ambiente do problema, constituindo-se em uma visão global dos principais dados em relacionamentos 
	(estruturas de informação), independente das restrições de implementação. Quando se fala em Modelo Conceitual, estamos nos referindo a primeira
	etapa do projeto de um sistema de aplicação em banco de dados
	
	O objetivo do Modelo Conceitual é descrever as informações contidas em uma realidade, as quais irão estar armazenadas em um banco de dados.
	É uma descrição em alto nível, mas que tem a preocupação de captar e retratar toda a realizade de uma organização, setor, repartição, departamento

	O objetivo é conter todas as informações da realidade que será armazenada no banco de dados, sem que se retratem as pecto relativo ao banco de dados.
	As informações podem ficar em formato de lista descritiva das operações a serem executadas
	Ex:
	
	-Cadastro de clientes
	Nome completo, Endereço, bairro, cidade,CEP,email
	
	-Cadastro de fornecedores
	Nome completo, Endereço, bairro, cidade, estado, CEP, telefone, contato


ENTIDADE
	Define-se entidade como aquele objeto que existe no mundo real com uma identificação e que possui atributos capazes de torna-lo identificavel e 
	tem existência independente. São coisas que existem no negócio, ou ainda, descrevem o negócio em si. Maria Raimunda, CPF 111111111111222-44, é 
	uma entidade, uma vez que só existe um único indivíduo com esse nome e número de CPF. Uma entidade pode ser concreta, como uma caneta ou uma pessoa,
	ou abstrata como um conceito ou uma sensação
	
ATRIBUTO
	São propriedades (características) que identificam as entidades. Uma entidade é representada por um conjunto de atributos. Cada instância possui uma
	coneção de elementos de dados ou atributos. Por exemplo, nome e função podem ser atributos de Departamento.
	Da mesma forma, no exemplo da escola, nome, matrícula e disciplinas que leciona pode ser atributos do professor
	
TIPOS DE ATRIBUTOS
	Simples - Não possui qualquer característica especial. São chamados também por atributos atômicos. Eles não são divisíveis, por exemplo, o nome da empresa é um atributo sem qualquer característica especial.
	Ex: nome, nacionalidade
	
	Composto - Os atributos compostos podem ser divididos em partes menores, ou subpartes, os quais representariam atributos básicos mais simples com significados independentes. Por exemplo,
	um atriputo endereço pode ser subdividido em rua, cidade e bairro
	
	Monovalorado - atributo que possui apenas um unico valor para cada instância
	Ex: Nome, RG, CPF
	
	Multivalorado - Quando o atributo pode possuir mais de um valor ao mesmo tempo
	Ex: Telefone, Email, Site, Endereco
	
RELACIONAMENTO
	Um relacionamento pode ser entendido como uma associação entre instâncias de Entidades devido a regras de negócio. Normalmente ocorre entre instâncias de duas ou mais Entidades, podendo ocorrer entre instâncias
	da mesma Entidade (auto-relacionamento)

CARDINALIDADE MÍNIMA
	A Cardinalidade mínima, expressa o número mínimo de ocorrências de determinada entidade associada a uma ocorrência da entidade em questão através do relacionamento. 
	Seus valores sâo:
	
	0->Relacionamento opcional
	1-> Relacionamento Obrigatório
	
CARDINALIDADE MÁXIMA
	A cardinalidade Máxima, expressa o número máximo de ocorrências de determinada entidade associada a uma ocorrência da entidade em qustâo através do relacionamento
	É usada para classificar os relacionamentos binários, aqueles nos quais os relacionamentos se dão entre duas entidades
	EX: um pra um (1:1)
		um para muitos (1:n)
		muitos para muitos (n:n)
		
CARDINALIDADE UM PRA UM (1:1)
	O relacionamento um-para-um é usado quando uma entidade A se relaciona com uma entidade B e vice-versa.	Este relacionamento é representado pelo sinal: 1:1

CARDINALIDADE UM PARA MUITOS (1:n)
	O relacionamento um-para-muitos é usado quando uma entidade A pode ser relacionar com uma ou mais entidades B.
	Este relacionamento é representado pelo sinal: 1:n 
	
CARDINALIDADE MUITOS PARA MUITOS (n:n)
	O relacionamento muitos-para-muitos é usado quando varias entidades A se relacionam com varias entidades B. 
	Este relacionamento é representado pelo sinal N:N ou N:M
	
GENERALIZAÇÃO/ESPECIALIZAÇÃO
	Este conceito nos permite atribuir propriedades particulares a um subconjunto das ocorrências (especializadas) de uma entidade genérica
	
	Associado ao conceito de generalização/especialização está a ideia de herança. As entidades herdam os atributos da entidades genéricas,
	além de possúirem seus próprios atributos
	
GENERALIZAÇÃO/ESPECIALIZAÇÃO TOTAL
	É classificada como TOTAL, quando para cada ocorrência da entidade existe sempre uma ocorrência nas entidades especializadas
	
GENERALIZAÇÃO/ESPECIALIZAÇÃO PARCIAL
	É classificada como PARCIAL, quando nem toda entidade genérica possui uma ocorrência correspondente em uma entidade especializada

ENTIDADE ASSOCIATIVA OU AGREGAÇÃO
	Ocorre quando tem que se associar uma entidade com uma ocorrência de um relacionamento
	
NORMALIZAÇÃO
	O objetivo do processo de normalização de tabelas é evitar os problemas provocados por falhas no projeto do Banco de Dados, bem como eliminar a "mistura" de assuntos e as correspondentes redundâncias
	de dados. A normalização de tabelas é utilizada para tentar detectar erros no projeto das tabelas e atributos de cada tabela e corriger estes erros, antes da criação e utilização do banco de dados
	
	Uma "Regra de Ouro" que devemos observar quando do projeto de Banco de Dados é a de "nâo misturar assuntos em uma mesma tabela",
	
	O processo de Normalização aplica uma serie de regras sobre as tabelas de um Banco de Dados, para verificar se estas estão corretamente projetadas. Embora existam cinco Formas Normais (ou regras de Normalização)
	na prática usamos um conjunto de três Formas Normais
	
PRIMEIRA FORMA NORMAL
	a 1FM diz que: cada ocorrência da chave primária deve corresponder a uma e somente uma informação, ou seja, a entidade não deve conter grupós repetitivos (multivalorados) e todos os seus atributos cotêm apenas
	valores atômicos (simples, indivisíveis)
	
	Para se obter entidades na 1FN, é necessário decompor cada entidade não normalizada em tantas entidades for o número de conjuntos de atributos repetitivos.
	Nas novas entidades criadas, a chave primária é a concatenação da chabe primária da entidade original mais o atributo do grupo repetitivo visualizado como chave primária desse grupo
	
DEPENDÊNCIA FUNCIONAL
	Dada uma tabela qualquer, dizemos que uma coluna ou conjunto de colunas A é, dependente funcional de uma outro coluna B, se a cada valor de B existir nas linhas de uma tabela um valor de A.
	Em outras palavras, A depende de B.
	Ex:id_cliente e nome_cliente
	
	nome depende do id, afinal so pode existir um id por cliente, mas pode existir varios nomes igual, mas nenhum ID igual

?>