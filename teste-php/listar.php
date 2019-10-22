<!-- inclusão arquivos cabeçalho  -->
<?php include 'include/layout/header.php' ?>


	<div id="main">
		<div class="container">
			<h2 class="h2">Lista de colaboradores - Departamento TI</h2>
			<hr>
			<table class="table table-hover">
				<thead>
				<tr>
						<th>Nome da estação</th>
						<th>Nome de usuario</th>
						<th>Sistema Operacional</th>
						<th>Nº IP</th>
						<th>Visualizar</th>
						<th>Editar</th>
						<th>Apagar</th>
					</tr>	
				</thead>
				<tbody>
					<tr>
						<td>PC-01</td>
						<td>Mjackson</td>
						<td>windows 10 - profissional</td>
						<td>10.10.1.1</td>
						<td><button type="submit" class="btn btn-primary">visualizar</button></td>
						<td><button type="submit" class="btn btn-success">editar</button></td>
						<td><button type="submit" class="btn btn-danger">apagar</button></td>
					</tr>
					<tr>
						<td>PC-02</td>
						<td>MTayson</td>
						<td>windows 10 - profissional</td>
						<td>10.10.1.2</td>
						<td><button type="submit" class="btn btn-primary">visualizar</button></td>
						<td><button type="submit" class="btn btn-success">editar</button></td>
						<td><button type="submit" class="btn btn-danger">apagar</button></td>
					</tr>
					<tr>
						<td>PC-03</td>
						<td>Mjagger</td>
						<td>windows 10 - profissional</td>
						<td>10.10.1.3</td>
						<td><button type="submit" class="btn btn-primary">visualizar</button></td>
						<td><button type="submit" class="btn btn-success">editar</button></td>
						<td><button type="submit" class="btn btn-danger">apagar</button></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	
<!-- inclusao arquivo do  rodape -->
<?php include 'include/layout/footer.php' ?>