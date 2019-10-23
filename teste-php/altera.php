<?php 
include 'include/layout/header.php'; 
include 'include/conexao/conexao.php';
include 'include/banco/banco-cadastro.php'; 

$id = $_POST['codigo'];
//	print_r($id);
//die;
$usuario = buscaUsuario($con, $id);

?>

<section>
	<div class="container">
		<div class="row">

			<?php 

			
			// variaveis  tabela: usuarios
				$nome   			= $_POST['nome'];
				$nomeUsuario    	= $_POST['nomeUsuario'];
				$email          	= $_POST['email'];
				$codDepartamento    = $_POST['codDepartamento'];
				$codEquipamento     = $_POST['codEquipamento'];
			
			if(altUsuarios($con, $id, $nome, $nomeUsuario, $email, $codDepartamento, $codEquipamento)){ ?>
			<p class="bg-success">O Usaurio <?= $nome ?> foi alterada.</p>
			<?php }else { ?>
			<p class="bg-danger">O Usaurios <?= $nome ?>, não foi alterada!</p>
			<?php
		}
		?>

		
	</div>
</div>
</section>


<?php include 'include/layout/footer.php'; ?>