<!-- inclusão arquivos cabeçalho  -->
<?php 
include 'include/layout/header.php';
include 'include/conexao/conexao.php';
include 'include/banco/banco-cadastro.php'; 

//variaveis locais
$id = $_GET['id'];
$usuario = buscaUsuario($con, $id);
	//print_r($id);
    //die;
?>
<div id="main">
	<div class="container">
		<h2 class="h2">Cadastro inventario - Departamento TI</h2>
		<hr>
		<form name="alterar-usuario" action="altera.php" method="post">
			<input type="hidden" name="codigo" value="<?=$usuario['codigo']?>">
			<h3 class="h3">Dados do colaborador:</h3>
			<div class="form-group">
				<label for="nomeCompleto">nomeCompleto</label>
				<input type="text" class="form-control" id="nome" name="nome" value="<?=$usuario['nomeCompleto']?>">
			</div><!--nome completo -->
			<div class="form-group">
				<label for="nomeUsuario">nomeUsuario</label>
				<input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" value="<?=$usuario['nomeUsuario']?>">
			</div><!--nome usuario -->
			<div class="form-group">
				<label for="email">Endereço de e-mail</label>
				<input type="email" class="form-control" id="email" name="email" value="<?=$usuario['email']?>">
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


				   <button type="submit" class="btn btn-primary">Alterar</button>
				</form>
			</div>
		</div>

		<!-- inclusao arquivo do  rodape -->
		<?php include 'include/layout/footer.php' ?>