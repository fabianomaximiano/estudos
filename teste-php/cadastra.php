 
<?php include 'include/layout/header.php'; ?>
<?php include 'include/conexao/conexao.php';?>
<?php include 'include/banco/banco-cadastro.php'; ?>



<?php
/* 
 * Variaveis locais;
 */
				
				
				
				// variaveis  tabela: usuarios
				$nome   			= $_POST['nome'];
				$nomeUsuario    	= $_POST['nomeUsuario'];
				$email          	= $_POST['email'];
				$codDepartamento    = $_POST['codDepartamento'];
				$codEquipamento     = $_POST['codEquipamento'];
				

				// echo "<div class='container'>";
				// echo "<b>Variaveis do formulario com dados capiturados</b></br>";
				// echo $nome ."</br>";
				// echo $email."</br>";
				// echo $nomeUsuario."</br>";
				// echo $codDepartamento."</br>";
				// echo $codEquipamento."</br>";
				// echo "</div>";

				
				if(inserirUsuarios($con, $nome, $nomeUsuario, $email, $codDepartamento, $codEquipamento)){ ?>

				<p class="alert-success">Colaborador <?= $nome ?>, <?= $nome ?> foi cadastrado.</p>
				<?php header("location:equipamento.php"); ?>

				<?php }else { ?>
				    <p class="alert-danger">Colaborador <?= $nome ?>, não foi cadastrado!</p>
				<?php
				}

				?>

			
		</div>
	</div>
</section>


<?php include 'include/layout/footer.php'; ?>