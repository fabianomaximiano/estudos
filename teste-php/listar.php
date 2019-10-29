<!-- inclusão arquivos cabeçalho  -->
<?php 
include 'include/layout/header.php'; 
include 'include/conexao/conexao.php';
include 'include/banco/banco-cadastro.php';
?>

<?php
if (array_key_exists("removido", $_GET) && $_GET["removido"] == "true") {
	?>
	<section>
		<div class="container">
			<div class="row">
				<p class="text-center text-sucess">Usuario cancelado com sucesso!</p>	
			</div>
		</div>
	</section>
	<?php
}
?>


<div id="main">
	<div class="container">
		<h2 class="h2">Lista de colaboradores - Departamento TI</h2>
		<hr>
		<table class="table table-hover">

			<thead>
				<tr>
					<th>Nome Completo</th>
					<th>Departamento</th>
					<th>Nome de usuario</th>
					<th>email</th>
					<th>Editar</th>
					<th>Apagar</th>
				</tr>	
			</thead>
			<tbody>
				<?php 
				$usuarios = lista_Usuarios($con);
				foreach ($usuarios as $usuario):
					?>
				<tr>
					<td><?= $usuario['nomeCompleto']; ?></td>
					<td><?= $usuario['nomeDepartamento']; ?></td>
					<td><?= $usuario['nomeUsuario']; ?></td>
					<td><?= $usuario['email']; ?></td>
					<td>
						<form action="remove.php" method="POST">
							<input type="hidden" name="codigo" value="<?= $usuario['codigo'];?>">
							<button class="btn btn-danger">Remover</button>
						</form>              
					</td> 
					<td><a class="btn btn-success" href="alterarusuario.php?id=<?= $usuario['codigo'] ?>">Editar</a></td>

				</tr>
			<?php endforeach; ?>

		</tbody>
	</table>
</div>
</div>

<!-- inclusao arquivo do  rodape -->
<?php include 'include/layout/footer.php' ?>