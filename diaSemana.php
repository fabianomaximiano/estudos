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
			
			<?php 

			//array meses:
			$meses = array( 1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro");

			//array semana:
			$diaSemana = array(0 => "Domingo", 1 => "Segunda-Feira", 2 => "Terça - Feira", 3 => "Quarta-Feira", 4 => "Quinta-Feira", 5 => "Sexta-Feira", 6 => "Sabado");

			//array cardapio:
			$cardapio = array(0 => "Restaurante Fechado.", 1 => "Arroz à grega, Bifes de pernil acebolado, Farofa e vinagrete", 2 => "Bifes à parmegiana, Arroz, Abobrinha refogada, Feijão, Fritas e Salada", 3 => "Feijuada completa, Bistecas grelhadas, Couve à mineira, Farofa e salada", 4 => "Espaguete ao sugo e carne assada fatiada.", 5 => "Strogonoff de frango ,arroz , salada tradicional , batata fritas e legumes.", 6 => "Feijuada completa, Bistecas grelhadas, Couve à mineira, Farofa e salada");	

			$data = date('y-m-d');

			//parametros para listar arrays:
			$diaSemana_numero = date('w', strtotime($data));
			$meses_numero = date('n', strtotime($data));
			$diames_numero = date('j');
			$cardapio_numero = date('w', strtotime($data));
			$ano = date('Y');

			function PulaLinha(){
				echo "<br><hr>";
			}

			function data(){
				$dia = date("d");
				$mes = date("m");
				$ano = date("Y");

				echo "<p>Hoje é dia: ".$dia."/".$mes."/".$ano."</p>";
			}//echo "<p>""</p"

			?>

			<?php 
			//data();
			//echo "<br>";
			?>
			
			<?php
			echo "<h2 class='span h2'>Cardapio da semana</h2><hr>"; 

			echo "<p class='texto_amarelo'>" . $diaSemana[$diaSemana_numero].", ". $diames_numero ." de ". $meses[$meses_numero] . " de " . $ano . "</p>";
			if ($diaSemana_numero == $cardapio_numero) {
				echo "<p><span  class='bold'>Cardapio do dia:</span> " . $cardapio[$cardapio_numero]. "</p>";	
			}else{
				echo "<h3>Deu merda meu irmão!</h3>";
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