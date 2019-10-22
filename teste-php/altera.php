<?php 
include 'include/layout/header.php'; 
include 'conexao/conecta.php';
include 'bancoPessoa.php'; 

$id = $_POST['id'];
$pessoas = buscaPessoa($con, $id);

?>

<section>
	<div class="container">
		<div class="row">

			<?php 

			
			$nomePessoa     = $_POST['nomePessoa'];
			$emailPessoa    = $_POST['emailPessoa'];
			$codSexo        = $_POST['codSexo'];
			$rgPessoa       = $_POST['rgPessoa'];
			$cpfPessoa      = $_POST['cpfPessoa'];
			$celularPessoa  = $_POST['celularPessoa'];
			$TelefonePessoa = $_POST['TelefonePessoa'];
			$enderecoPessoa = $_POST['enderecoPessoa'];
			$numeroPessoa   = $_POST['numeroPessoa'];
			$bairroPessoa   = $_POST['bairroPessoa'];
			$cepPessoa      = $_POST['cepPessoa'];
			$cidadePessoa   = $_POST['cidadePessoa'];
			$ufPessoa       = $_POST['ufPessoa'];
			
			if(alterarPessoa($con, $id, $nomePessoa, $emailPessoa, $codSexo, $rgPessoa, $cpfPessoa, $celularPessoa, $TelefonePessoa, $enderecoPessoa, $numeroPessoa, $bairroPessoa, $cepPessoa, $cidadePessoa, $ufPessoa)){ ?>
			<p class="bg-success">Tipo de Usaurios <?= $nomePessoa ?> foi alterada.</p>
			<?php }else { ?>
			<p class="bg-danger">Tipo de Usaurios <?= $nomePessoa ?>, não foi alterada!</p>
			<?php
		}
		?>

		
	</div>
</div>
</section>


<?php include 'include/layout/footer.php'; ?>