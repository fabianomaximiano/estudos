	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Marcadores dos comandos</title>
	</head>
	<body>
		<?php 

		echo "Forma preferida para indicar  os comandos PHP";

		?>

		<br />
		<? echo "forma simplificada"; ?>

		<?= "mesmo comando anterior sem comando echo."; ?>

		<script language="PHP">
			echo "Outro estilo";
		</script>


		<?php 
			$data = date("d/m/Y H:i:s",time()); 
			
			echo "<p align='center'>Hoje  é: ";
			echo $data;
			echo "<hr>";
			echo "</p>";

			for ($i=0; $i <=10 ; $i++) { 


			if ($i %2==0) {
				?>
				<p><font color="red">Valor de $i: <?=$i ?></font>		&nbsp; [par] 

					<?php  

				}
				else{
					?>
					<font color="green">Valor de $i: <?=$i ?> </font> &nbsp;  [impar]
					<?php 

				}
				?>
				
			</p>
			<?php 	
		}


		?>

	</body>
	</html>