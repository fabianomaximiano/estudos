<!-- inclusão arquivos cabeçalho  -->
<?php include 'include/layout/header.php' ?>

	<div id="main">
		<div class="container">
			<h2 class="h2">Cadastro inventario - Departamento TI</h2>
			<hr>
			<form>
				<h3 class="h3">Dados do colaborador:</h3>
				<div class="form-group">
					<label for="nomeCompleto">nomeCompleto</label>
					<input type="text" class="form-control" id="nomeCompleto" placeholder="Por favor informe o nome completo do colaborador!">
				</div><!--nome completo -->

				<div class="form-group">
					<label for="email">Endereço de e-mail</label>
					<input type="email" class="form-control" id="email" placeholder="Informe o email corporativo da empresa">
				</div><!-- email -->
				<hr>
				<h3 class="h3">Dados de acesso a rede do colaborador:</h3>
				<div class="form-group">
					<label for="nomeUsuario">Informar o usuario de acesso a rede</label>
					<input type="text" class="form-control" id="nomeUsuario" placeholder="Informe o Nome de Usuario do colaborador">
				</div>
				<hr>
				<h3 class="h3">Grupo de acesso permitido ao colaborador:</h3>
				<div class="form-group">
				<label for="departamento">Informe o departamento do colaborador</label>
					<select class="form-control">
						<option>Selecione seu departamento</option>
						<option value="">Recursos Humanos</option>
						<option value="">TI</option>
						<option value="">Atendimento</option>
						<option value="">Suporte</option>
					</select>
				</div>

				<hr>

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
					<select class="form-control">
						<option>Selecione sistema Operacional</option>
						<option value="">Recursos Humanos</option>
						<option value="">TI</option>
						<option value="">Atendimento</option>
						<option value="">Suporte</option>
					</select>
				</div>
				<div class="form-group">
					<label for="chaveSo">Informar Chave do S.O</label>
					<input type="text" class="form-control" id="chaveSo" placeholder="Informe o numero de serie da estação">
				</div>
				<div class="form-group">
					<label for="Antivirus">Informar Antivirus</label>
					<select class="form-control">
						<option>Selecione Ant virus utilizado</option>
						<option value="">Recursos Humanos</option>
						<option value="">TI</option>
						<option value="">Atendimento</option>
						<option value="">Suporte</option>
					</select>
				</div>

				<button type="submit" class="btn btn-primary">cadastras</button>
			</form>
		</div>
	</div>

<!-- inclusao arquivo do  rodape -->
<?php include 'include/layout/footer.php' ?>