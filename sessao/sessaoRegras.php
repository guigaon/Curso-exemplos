<?php
Sessão é uma maneira de armazenar informações temporariamente por um determinado tempo.
Quando uma sessão é iniciada, um ID aleatório é gerado e um arquivo temporário é criado no servidor com o nome igual ao ID. 
É nesse arquivo que os dados da sessão são armazenados 

Antes de utilizar a funcionalidade de sessão, primeiramente devemos inicar uma sessão e para isso chamamos a função:

			session_start()
			
O session_start() define o início de uma sessão e deve ser chamado antes de qualquer dado seja enviado para o response


Para armazenar as variáveis de sessão, usamos a superglobal $_SESSION["variável"]3
							$_SESSION["variável"] = valor
							
-RECUPERAR DADOS DA SESSÃO
	Para recuparar os dados armazenados na sessão também utilizamos a superglobal $_SESSION["variavel"]
	
									echo $_SESSION["variavel"]


-EXEMPLO

<?php
	session_start();
	
		$_SESSION["nome"] = "Gui";
		$_SESSION["email"] = "a@gmail.com";
		$_SESSION["login"] = "123";

(ACEITA NUMERO, VALOR DE STRING, VALOR EM BRANCO, ARRAY)


?>

RECUPERANDO DADOS EXEMPLO
<?php
	session_start();
		echo "Olá", $_SESSION["nome"] . " seja bem vindo!"

?>

-REMOVENDO REGISTRO DE VARIÁVEIS DA SESSÃO
	Quando queremos excluir uma variável de sessão especificamente usamos a função unset()
	
									unset($SESSION["variável"])
									
-DESTRUINDO A SESSÃO
	Para destruir uma sessão e remover todas as variáveis da sessão de uma vez, podemos usar a função session_destroy()
	
									session_destroy()


?>
-O QUE É UM COOKIE?

	Um cookie é uma pequena parte das informações que os scripts podem armazenar em uma máquina do lado cliente

	Vantagens em se usar cookie que ao invés de session é que o cookie fica armazenado na máquina do cliente não utilizando o espaço do servidor
	e também o fato de poder permanecer ativo durante minutos, horas, dias, meses ou anos de acordo com a configuração.

	A grande desvantagem é que o usuário tem acesso ao mesmo, podendo modificar seu valor e também o fato de poder bloquear para que o cookie não seja salvo
	
	IMPORTANTE: utilize cookie somente para informações que não comprometam a segurança do seus sites 

-CRIANDO UM COOKIE
	Para criarmos um cookie utilizamos a função setcookie, devendo ser utilizado antes que qualquer saída seja enviada para o response que tem a seguinte sintaxe:
		
		setcookie(nome[,valor[, validade[, caminho[, domínio[,https[, httponly]]]]]] )
			//apenas nome é obrigadotorio
		setcookie("id_cliente", "1232", time() + "(3*24*3600)", "cliente", ".mjailton.com.br");
			//validade de 3 dias

-RECUPERANDO UM COOKIE
	Para recuperarmos o valor de um cookie criado usamos o array superglobal $_COOKIE. Uma coisa importante a ser lembrada é que os cookie não poderão ser utilizados dentro
	da pagina que os criou. Somente após a proxima requisição é que o mesmo estará disponivel
	
		$nome = $_COOKIE["nome"];
		
EXCLUINDO O COOKIE
	Para excluirmos um cookie basta chamar a função setcookie passando apenas o nome da variável 
	setcookie("id_cliente", 0);
	setcookie("id_cliente");//ele modifica o cookie ententendo que a validade expirou



