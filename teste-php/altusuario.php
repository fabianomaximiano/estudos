<?php

	include 'include/layout/header.php';
	include 'include/conexao/conexao.php';
	include 'include/banco/banco-cadastro.php';


	$id = $_POST['id'];
	$usuario = buscaUsuario($con, $id);
?>

<section>
	<div class="container">
		<div class="row">

			<?php 

			$nome            = $_POST['nomeCompleto'];
			$nomeUsuario 	 = $_POST['nomeUsuario'];
			$email 			 = $_POST['email'];
			//$id
			$codDepartamento = $_POST['codDepartamento'];
			$codEquipamento  = $_POST['codEquipamento'];

			if (altUsuarios($con, $id, $nome, $nomeUsuario, $email, $codDepartamento, $codEquipamento)) { ?>
			
			<p class="bg-success">Nome <?= $nome ?>, <?= $email ?> foi alterado.</p>
			<?php }else { ?>
			<p class="bg-danger">Nome <?= $nome ?>, não foi alterado!</p>
			<?php
		}
		?>


	</div>
</div>
</section>

<?php

	include 'footer.php';

 ?>