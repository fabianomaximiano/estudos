<?php include 'cabecalho.php'; ?>
<?php include 'conexao/conecta.php';?>
<?php include 'bancoPessoa.php'; ?>


<section>
  <div id="conteudo" class="container">
    <div class="row">
      <h1>Cadastro de Pessoa</h1>
    </div>
  </section>
  <!-- arquivo que testa conexao com o banco -->

  <form id="formPessoa" action="cadastrarPessoa.php" method="POST" data-toggle="validator" role="form">
    <section>
      <div class="container">
        <div class="row fnd-form">
          <div class="form-group col-md-12">
            <label for="nomePessoa" class="control-label"><h4>Nome Pessoa</h4></label>
            <input type="text" class="form-control" id="nomePessoa" name="nomePessoa" placeholder="Nome Pessoa" data-error="Por favor, informe seu nome." required>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-12">  
            <label for="rgPessoa" class="control-label"><h4>RG</h4></label>
            <input type="text" class="form-control" id="RG" name="rgPessoa" placeholder="Informe seu RG" data-error="Por favor, informe seu RG." required>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-12">  
            <label for="cpfPessoa"><h4>CPF</h4></label>
            <input type="text" class="form-control" id="cpfPessoa" name="cpfPessoa" placeholder="cpfPessoa" data-error="Por favor, informe o nome do responsavel." required>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-12">  
            <label for="codSexo"><h4>Sexo</h4></label>
            <select  name="codSexo" class="form-control">
              <?php
          /*
           * Esta linha é responsavel por listar e apresentar informaçoes de usuarios cadastrados;
           */
          $resultado = mysqli_query($con, "select * from TblSexo");
          while($codSexo = mysqli_fetch_assoc($resultado)){ ?>
            <option value="<?=$codSexo['codSexo'];?>">
              <?= $codSexo['nomeSexo']?>
            </option>
          <?php } ?>  
        </select>
      </div>
    </div>
  </div> 
</section>
<section>
  <div class="container">
    <div class="row fnd-form"> 

      <div class="form-group col-md-12">
        <label for="emailPessoa"><h4>Email</h4></label>
        <input type="text" class="form-control" id="emailPessoa" name="emailPessoa">
        <div class="help-block with-errors"></div>
      </div>             
      <div class="form-group col-md-12">
        <label for="celularPessoa"><h4>Celular</h4></label>
        <input type="text" class="form-control" id="celularPessoa" name="celularPessoa">
        <div class="help-block with-errors"></div>
      </div>
      <div class="form-group col-md-12">
        <label for="TelefonePessoa"><h4>Telefone</h4></label>
        <input type="text" class="form-control" id="TelefonePessoa" name="TelefonePessoa" required>
        <div class="help-block with-errors"></div>
      </div>        
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row fnd-form">
     <div class="form-group col-md-8">
      <label for="enderecoPessoa" class="control-label"><h4>Endereço</h4></label>
      <input type="text" class="form-control" id="enderecoPessoa" name="enderecoPessoa" placeholder="Endereco Pessoa" required>
      <div class="help-block with-errors"></div> 
    </div>
    <div class="form-group col-md-4">
      <label><h4>Numero</h4></label>
      <input type="text" class="form-control" id="numeroPessoa" name="numeroPessoa" placeholder="Numero Pessoa" required>
    </div>  
    <div class="form-group col-md-12">
      <label><h4>Bairro</h4></label>
      <input type="text" class="form-control" id="bairroPessoa" name="bairroPessoa" placeholder="Informe o Bairro" required>          
    </div>
    <div class="form-group col-md-12">
      <label><h4>Referencia</h4></label>
      <input type="text" class="form-control" id="referenciaPessoa" name="referenciaPessoa" placeholder="Informe uma Referência" required>          
    </div>
    <div class="form-group col-md-12">
      <label><h4>CEP</h4></label>
      <input type="text" class="form-control" id="cepPessoa" name="cepPessoa" placeholder="Informe CEP" required>    
    </div>
    <div class="form-group col-md-8">
      <label><h4>Cidade</h4></label>
      <input type="text" class="form-control" id="cidadePessoa" name="cidadePessoa" placeholder="Informe sua Cidade" required>    

    </div>
    <div class="form-group col-md-4">
      <label><h4>UF</h4></label>
      <input type="text" class="form-control" id="ufPessoa" name="ufPessoa" placeholder="Informe UF" required>    
    </div>
  </div>
</div>
</div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="organiza">
        <button type="submit" class="btn btn-primary">Enviar</button><button type="submit" class="btn btn-primary">Limpar</button>
      </div>
    </div>
  </div>
</section>
</form>

<?php include 'footer.php'; ?>