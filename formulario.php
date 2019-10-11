<?php 

	//function saudacao(){

		$hora = date("H");
		if($hora >= 0 && $hora < 12){
			$saudacao = "Bom dia!";
		}
		else if($hora >=12 &&  $hora <18){
			$saudacao = "Boa tarde!";
		}
		else{
			$saudacao = "Boa noite!";
		}

	//}

 ?>

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
			
			<h2 class="h2 span">Formulario</h2>

			<?php 

			


			//echo $hora;
			//saudacao();
			echo "<p>$saudacao " .$_GET["nome"] . " tudo bem com senhor(a).</p>";
			
			
			?>




		</div>
	</div>
	    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>