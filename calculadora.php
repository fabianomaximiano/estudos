
<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<meta charset="UTF-8">
	<title>Meus estudos</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<div class="content">
		<div class="col-md-12">
			
			<h2 class="h2 span">CALCULADORA</h2>

			<!DOCTYPE html>
			<html lang="pt-BR">
			<head>
				<meta charset="UTF-8">
				<title>Calculadora</title>
			</head>
			<body>
				<div class="container">
					<div class="col-md-12">
						<?php
						$a = isset($_POST["a"]) ? $_POST["a"] : '';
						$b = isset($_POST["b"]) ? $_POST["b"] : '';
						$sinal = isset($_POST["operacao"]) ? $_POST["operacao"] : '';
						?>
						<form id="formteste" class="form-group" name="formteste" action="" method="post">
						Valor 1: <input class="form-control"  name="a" type="number" value="<? echo $a ?>"/><br/><br>
							Valor 2: <input class="form-control" name="b" type="number" value="<? echo $b ?>"/>
							<br/><br/>
							Selecione uma operação:<br/>
							<input name="operacao" id="x" type="radio" value="Soma" <? if($sinal == "Soma") echo "checked" ?> >Soma<br/>
							<input name="operacao" type="radio" value="Subtração" <? if($sinal == "Subtração") echo "checked" ?> >Subtração<br/>
							<input name="operacao" type="radio" value="Multiplicação" <? if($sinal == "Multiplicação") echo "checked" ?> 	>Multiplicação<br/>
							<input name="operacao" type="radio" value="Divisão" <? if($sinal == "Divisão") echo "checked" ?> >Divisão
							<input type="hidden" name="oculto" value="efetuar"/>
							<br/><br/>
							<input class="btn btn-primary" name="calcular" type="submit" value="Calcular"/>
							<input class="btn btn-default name="limpar" type="reset" value="Limpar" onclick="javascript:window.location.reload();"/>
							<br/><br/>
						</form>

						<?php
						if ($_POST && $_POST["oculto"] == "efetuar") {
							$a = $_POST["a"];
							$b = $_POST["b"];
							$sinal = $_POST["operacao"];
							switch ($sinal) {
								case $sinal == "Soma":
								$total = $a + $b;
								break;
								case $sinal == "Subtração":
								$total = $a - $b;
								break;
								case $sinal == "Multiplicação":
								$total = $a * $b;
								break;
								case $sinal == "Divisão":
								if($b == 0){
									$total = "Não é possível dividir por zero";
								}else {
									$total = $a / $b;
								}
								break;
							}
							echo "Valor Total da operação: " . $total;
							// if ($a > $b) {
							// 	echo "<br/><br/>O Valor 1 é MAIOR que o Valor 2.";
							// } elseif ($a < $b) {
							// 	echo "<br/><br/>O Valor 1 é MENOR que o Valor 2.";
							// } else {
							// 	echo "<br/><br/>Valores iguais.";
							// }
						}
						?>




					</div>
				</div>
				<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
				<script src="assets/js/bootstrap.min.js"></script>
			</body>
			</html>