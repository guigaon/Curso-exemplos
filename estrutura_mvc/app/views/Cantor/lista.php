<!DOCTYPE html>
<html>
	<head>
		<title>Sistema cadastro</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
		<h1>Cadastro</h1>
		<fieldset>
			<legend>Lista de Cantores</legend>
			<a href="<?php echo URL_BASE . "cantor/criar "?>" class="btn float-right" style="top:-30px">Inserir novo</a>
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome do Cantor</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
				<?php 
					foreach($cantores as $cantor) {	?>
					<tr>
						<td align="center"><?php echo $cantor["id_cantor"]?></td>
						<td align="center"><?php echo $cantor["cantor"]?></td>
		
						<td align="center">
							<a href="<?php echo URL_BASE . "cantor/excluir "?>" class="btn">Excluir</a>
							<a href="<?php echo URL_BASE . "cantor/editar "?>"  class="btn">Editar</a>
						</td>
					</tr>
				<?php }?>
				</tbody>
			<table>
		</fieldset>
	</body>
</html>