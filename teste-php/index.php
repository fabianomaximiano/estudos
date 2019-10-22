<!-- inclusao arquivos do cabeçalho -->
<?php include 'include/layout/header.php' ?>
<?php include 'include/conexao/conexao.php';?>
<?php include 'include/banco/banco-cadastro.php'; ?>

<div id="main">
	<div class="container">
		<h2 class="h2">Cadastro inventario - Departamento TI</h2>
		<hr>
		<form  action="cadastra.php" method="POST">
			<h3 class="h3">Dados do colaborador:</h3>
			<div class="form-group">
				<label for="nome">nome Completo</label>
				<input type="text" class="form-control" id="nome" name="nome" placeholder="Por favor informe o nome completo do colaborador!">
			</div><!--nome completo -->

			
			<h3 class="h3">Dados de acesso a rede do colaborador:</h3>
			<div class="form-group">
				<label for="nomeUsuario">Informar o usuario de acesso a rede</label>
				<input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" placeholder="Informe o Nome de Usuario do colaborador">
			</div>
			<hr>
			<div class="form-group">
				<label for="email">Endereço de e-mail</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Informe o email corporativo da empresa">
			</div><!-- email -->
			<hr>
			<h3 class="h3">Grupo de acesso permitido ao colaborador:</h3>
			<div class="form-group">
				<label for="codDepartamento">Informe o departamento do colaborador</label>
				<select id="codDepartamento" name="codDepartamento" class="form-control">
					<?php 

						/*
				           Esta linha é responsavel por listar departamentos;
				        */
				          $resultado = mysqli_query($con, "select * from departamento");
				          while($codigo = mysqli_fetch_assoc($resultado)){ ?>
				            <option value="<?=$codigo['codigo'];?>">
				              <?= $codigo['nomeDepartamento']?>
				            </option>
				          <?php } ?>  

					 ?>
				</select>
			</div>
			<h3 class="h3">Estação de trabalho utilizada pelo colaborador:</h3>
			<div class="form-group">
				<label for="codEquipamento">Informe o nome da Estacao</label>
				<select id="codEquipamento" name="codEquipamento" class="form-control">
					<?php 

						/*
				           Esta linha é responsavel por listar departamentos;
				        */
				          $resultado = mysqli_query($con, "select * from equipamento");
				          while($codigo = mysqli_fetch_assoc($resultado)){ ?>
				            <option value="<?=$codigo['codigo'];?>">
				              <?= $codigo['nomeEstacao']?>
				            </option>
				          <?php } ?>  

					 ?>
				</select>
			</div>
			<hr>


			<button type="submit" class="btn btn-primary">cadastras</button>
		</form>
	</div>
</div>

<!-- inclusao arquivos footer -->
<?php include 'include/layout/footer.php' ?>

