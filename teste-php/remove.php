<?php include 'include/layout/header.php'; ?>
<?php include 'include/conexao/conexao.php'; ?>
<?php include 'include/banco/banco-cadastro.php'; ?>



<?php
/* 
 * script responsavel por indentificar itens a ser removido do sistema;
 */

$id = $_POST['codigo'];
//print_r($id);
//die;
removeUsuarios($con, $id);
header("location: listar.php?removido=true");
    die();
?>