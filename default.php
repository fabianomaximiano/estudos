<!DOCTYPE html>
<html lang="pt-br">
  <head>
   
    <title>PHP 5 - GUIA DE PROGRAMADOR</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>

    <section class="text-center">
    <?php 

        echo "Exemplo de um programa PHP";
        $data = date("d/m/Y h:i:s", time());
        //meu primeiro comentario
        echo "<p>Hoje é: ";
        echo $data;
        echo "</p>";
        /*Se é loco segundo coments */

        $valor = gettype($data);

        echo $valor;
    ?>
    </section>
    


  </body>
</html>