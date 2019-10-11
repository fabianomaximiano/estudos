<!DOCTYPE html>
<html lang="PT-BR">
<head>
  <meta charset="UTF-8">
  <title>Meus estudos</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>


  <div class="container">
    
    <div class="col-md-12 col-xs-12 ">
      <section class="container">
        
        <h1>IMC</h1>
        <form class="row" method="post" action="calcula-imc.php">
          <label for="peso">
            <h3>Peso:</h3>
            <input type="text" class="form-control" name="peso" />
          </label>
          <label for="Altura">
            <h3>Altura:</h3>
            <input type="text" class="form-control" name="altura" />
          </label>
          <div style="clear: both">
            <button class="btn btn-primary">Medir o imc</button>
          </div>
        </form>
      </section>
    </div>

  </body>

  </html>