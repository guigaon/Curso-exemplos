<body>
		<h1>Cadastro</h1>
		<fieldset>
			<legend>Cadastro de Cantor</legend>
			<form action="<?php echo URL_BASE . "cantor/inserir"?>" method = "POST">
				<label>
					<small>Nome</small>
					<input type="text" name= "nome" placeholder="Inserir nome">
					
					
				<input type="submit" value="Cadastrar">
			</form>
			
		</fieldset>
	</body>