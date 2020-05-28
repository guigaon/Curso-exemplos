		<body>
		<h1>Áreas da figuras geométricas</h1>
		<fieldset>
			<legend>Calculo</legend>
			<form action="<?php echo URL_BASE . "area/calcula" ?>" method="Post">
				<label class="col-4">
					<small>Nome</small>
					<select name="figura">
						<option value="quadrado" >Quadrado</option>
						<option value="retangulo">Retângulo</option>
						<option value="triangulo">Triângulo</option>
						<option value="circulo">Circulo</option>
					</select>
				</label>
				
				<label class="col">
					<small>Base</small>
					<input type="text" name="base" value="<?php echo isset($base) ? $base: 0?>" placeholder="Digite aqui">
				</label>
				<label class="col">
					<small>Altura</small>
					<input type="text" name="altura" value="<?php echo isset($altura) ? $altura: 0?>" placeholder="Digite aqui">
				</label>
				<label class="col">
					<small>Raio</small>
					<input type="text" name="raio" value="<?php echo isset($raio) ? $raio: 0?>" placeholder="Digite aqui">
				</label>
				<div class="col-12">
				<input type="submit" value="calcular">
				</div>
			</form>
		
		<?php if(isset($area)) { //so existe se a variavel area for usada?>
		<fieldset class="alt">
			<legend>Resultado</legend>
			<div class="centralizar"><img src="<?php echo URL_BASE . "assets/img/" . $figura . ".png"?>"></div>
			<h5>Área do triângulo é área = <b>(b x a) / 2 = <?php echo $area ?></b></h5> 
		</fieldset>
		 <?php } ?>
		</fieldset>
	</body>