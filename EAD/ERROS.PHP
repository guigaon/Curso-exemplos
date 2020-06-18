<?php
MANIPULAÇÃO DE ERROS

2 CATEGORIAS DE ERROS
PARAMETROS E FUNÇÕES

	Os parametros, presentes no arquivo php.ini devem ser utilizador para uma definição genérica do comportamento do PHP perante erros que possam acontecer
	(principalmente na fase de produção)
	
Error_reporting
	Determina qual tipo de erro deve ser reportado. Esse parãmetro pode ser informado por um inteiro ou por constantes de erro definido no PHP, ou ainda por uma conbinação
	dos vários tipos de erro (utilizando os operadores binários OU (|) E (&), o operador de negação (~))

TIPOS DE error_reporting
	E_ERROR
	Indica um erro fatal do sistema (erros fatais impedem a continuação da execução do script, obrigando a uma interrupção forçada(telas laranjas)), possui valor 1	

	E_WARNING
	Avisos em tempo de execução(erros considerados não fatais, ou seja, o script não terá sua execução interrompida, porém não há nenhuma garantia de que ele será executado corretamente,
	ou seja que os resultados esperados sejam atingidos) - valor 2
	
	E_PARSE
	Erros de compilação (gerado somente pelo compilador do PHP) - valor 4
	
	E_NOTICE
	Indica um aviso de menor importância, apontando um possível erro (via de regra a execução do script transcorre normalmente) - valor 8
	
	E_CORE_ERROR
	Um erro fatal ocorrido na inicialização do PHP (semelhante a E_ERROR) - valor 16
	
	E_CORE_WARNING
	O mesmo que o E_WARNING, exceto pelo fato de que é gerado na inicialização do PHP - valor 32
	
	E_COMPILE_ERROR
	Um erro fatal, semelhante a E_ERROR, exceto pelo fato de que ele é gerado pelo Zend Scripting Engine - valor 64
	
	Entre outros erros...









?>