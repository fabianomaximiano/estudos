<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<div class="content">
		<div class="col-md-12">
			
			<?php 

			function PulaLinha(){
				echo "<br><hr>";
			}

			function data(){
				$dia = date("d");
				$mes = date("m");
				$ano = date("Y");

				echo "<p>Hoje é dia: ".$dia."/".$mes."/".$ano."</p>";
			}

			?>

			<?php 
			data();
			//echo "<br>";
			echo "<h2 class='span h2'>Conversões de variaveis</h2><hr>"; 
			?>




		</div>
	</div>
	    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>