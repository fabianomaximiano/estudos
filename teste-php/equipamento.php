<!-- inclusao arquivos do cabeçalho -->
<?php include 'include/layout/header.php' ?>
<?php include 'include/conexao/conexao.php';?>
<?php include 'include/banco/banco-cadastro.php'; ?>

<div id="main">
	<div class="container">
		<h2 class="h2">Cadastro inventario - Departamento TI</h2>
		<hr>
		<form id="formPessoa" action="cadastra.php" method="POST">
			
			<h3 class="h3">Dados do equipamento utilizado colaborador:</h3>

			<div class="form-group">
				<label for="nomeEstacao">Informar nome da estação</label>
				<input type="text" class="form-control" id="nomeEstacao" placeholder="Informe o Nome da maquina para identificação na rede">
			</div>
			<div class="form-group">
				<label for="numeroIP">Informar IP fixo da estação</label>
				<input type="text" class="form-control" id="numeroIP" placeholder="Informe o numero IP fixo da estação">
			</div>
			<div class="form-group">
				<label for="dominio">Informar Dominio da rede</label>
				<input type="text" class="form-control" id="dominio" placeholder="Informe o nome do Dominio da rede">
			</div>
			<div class="form-group">
				<label for="numeroSerie">Informar nº de serie da estação</label>
				<input type="text" class="form-control" id="numeroSerie" placeholder="Informe o numero de serie da estação">
			</div>
			<div class="form-group">
				<label for="nomeFabricante">Informar nome do fabricante da estação</label>
				<input type="text" class="form-control" id="nomeFabricante" placeholder="Informe o nome do fabricante estação">
			</div>
			<div class="form-group">
				<label for="tipoHardware">Informar tipo de Hardware</label>
				<input type="text" class="form-control" id="tipoHardware" placeholder="Informe o numero de serie da estação">
			</div>
			<hr>
			<h3 class="h3">Sistema operacional e  anti virus da estação</h3>
			<div class="form-group">
				<label for="sOperacional">Informar Sistema Operacional</label>
				<select id="sOperacional" class="form-control">
					<?php 

							/*
							 * Esta linha é responsavel por listar sistema operacional;
							 */
							$resultado = mysqli_query($con, "select * from SO");
							while($codSO = mysqli_fetch_assoc($resultado)){ ?>
							<option value="<?=$codSO['codigo'];?>">
								<?= $codSO['nomeSO'];?>  <?=$codSO['versaoSO'];?>
							</option>
							<?php } ?>  

							?>
						</select>
					</div>
					<div class="form-group">
						<label for="chaveSo">Informar Chave do S.O</label>
						<select id="chaveSO" class="form-control">
							<?php 
							/*
							 * Esta linha é responsavel por listar chaveSO;
							 */
							$resultado = mysqli_query($con, "select * from SO");
							while($chaveSO = mysqli_fetch_assoc($resultado)){ ?>
							<option value="<?=$chaveSO['codigo'];?>">
								<?= $chaveSO['chaveSO']?>
							</option>
							<?php } ?>
							?> 			  
						</select>
					</div>
					<div class="form-group">
						<label for="Antivirus">Informar Antivirus</label>
						<select id="antivirus" class="form-control">
							<?php 
					/*
							 * Esta linha é responsavel por listar antivirus;
							 */
					$resultado = mysqli_query($con, "select * from Antivirus");
					while($codAntivirus = mysqli_fetch_assoc($resultado)){ ?>
					<option value="<?=$codAntivirus['codigo'];?>">
						<?= $codAntivirus['nomeAntivirus']?>
					</option>
					<?php } ?>
					?> 			  
				</select>
			</div>

			<button type="submit" class="btn btn-primary">cadastras</button>
		</form>
	</div>
</div>

<!-- inclusao arquivos footer -->
<?php include 'include/layout/footer.php' ?>


<!-- 
$nomeCompleto
$email
$nomeUsuario
$departamento
$nomeEstacao
$numeroIp
$dominio
$numeroSerie
$nomeFabricante
$tipoHardware
$sOperacional
$chaveSo
$antivirus
<--></-->