 
<?php include 'include/layout/header.php'; ?>
<?php include 'include/conexao/conexao.php';?>
<?php include 'include/banco/banco-equipamento.php'; ?>



<?php
/* 
 * Variaveis locais;
 */
				
				
				
				// variaveis  tabela: usuarios
				//$nome   			= $_POST['nome'];
				$nomeEstacao 		= $_POST['nomeEstacao'];		 
    			$numeroIP 			= $_POST['numeroIP'];
    			$numeroSerie 		= $_POST['numeroSerie'];
    			$nomeFabricante 	= $_POST['nomeFabricante'];
    			$dominio 			= $_POST['dominio'];
    			$tipoHardware 		= $_POST['tipoHardware'];
    			//$sOperacional 		= $_POST['sOperacional'];
    			$codSO 			    = $_POST['codSO'];
    			$codAntivirus 		= $_POST['codAntivirus'];
				

				
				if(inserirEquipamento($con, $nomeEstacao, $numeroIP, $numeroSerie, $nomeFabricante, $dominio, $tipoHardware, $codSO, $codAntivirus)){ ?>
					
				<p class="alert-success">Equipamento <?= $nomeEstacao ?>, foi cadastrado.</p>
				<?php header("location:equipamento.php"); ?>

				<?php }else { ?>
				    <p class="alert-danger">Equipamento <?= $nomeEstacao ?>, não foi cadastrado!</p>
				<?php
				}

				?>

			
		</div>
	</div>
</section>


<?php include 'include/layout/footer.php'; ?>