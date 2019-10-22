<?php include 'cabecalho.php' ?>
<?php include 'conexao/conecta.php'; ?>
<?php include 'bancoPessoa.php'; ?>

<?php
if (array_key_exists("removido", $_GET) && $_GET["removido"] == "true") {
 ?>
 <section>
  <div class="container">
   <div class="row">
    <p class="bg-success">Pessoa excluida(o) com sucesso!</p>	
  </div>
</div>
</section>
<?php
}
?>


<section>
  <div class="container">
   <div class="row">

    <table class="table table-striped table-bordered">

      <thead>
        <tr>
          <th>Nome Completo</th>
          <th>Email</th>
          <th>celular</th> 
          <th width="2px">UF</th>
          <th style="text-align:center">Novo</th>
          <th style="text-align:center">Remover</th>
          <th style="text-align:center">Editar</th>
        </tr>
      </thead>
      <tbody>

       <?php
    /*
     * Esta linha é responsavel por listar e apresentar informaçoes de empresas cadastradas;
     */
    
    $pessoas = listaPessoas($con);

    foreach ($pessoas as $pessoa) :




      //echo $idSexo;

      ?>
      <tr>
        <td><?= $pessoa['nomePessoa']; ?></td>
        <td><?= $pessoa['emailPessoa']; ?></td>
        <td><?= $pessoa['celularPessoa']; ?></td>
        <td width="2%"><?= $pessoa['ufPessoa']; ?></td>
        <td><a class="btn btn-primary" href="cadPessoa.php">Novo</a></td>
        <td>
          <form action="remove-pessoa.php" method="post">
            <input type="hidden" name="codPessoa" value="<?= $pessoa['codPessoa']; ?>">
            <button class="btn btn-danger">Remover</button>
          </form>
        </td>
        <td>
          <a class="btn btn-success" href="editar-pessoa.php?id=<?= $pessoa['codPessoa'] ?>">Editar</a>     
        </td>
      </tr>
      <?php
    endforeach;
    ?>


  </tbody>
</table>
</div>
</div>
</section>

<?php

include 'footer.php'; 

?>