<?php include 'conexao/conecta.php'; ?>
<?php include 'bancoPessoa.php'; ?>



<?php
/* 
 * script responsavel por indentificar itens a ser removido do sistema;
 */

$id = $_POST['codPessoa'];
//print_r($id);
//die;
removePessoa($con, $id);
header("location: pessoaLista.php?removido=true");
    die();
?>
