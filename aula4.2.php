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

    <?php 

        function pula_linha(){
            echo "<hr>";
        }
    
    ?>

 <section>


    <h2 class="h2"> Operadores de comparação: </h2>

    <?php
       pula_linha();

    ?>


    
  <?php  
  
    $num1 = 10;
    $num2 = 30;

    echo "Igualdade: " .($num1 == $num2). "<br>";
    echo "idênticos: " .($num1 === $num2). "<br>";

    //iguais e do mesmo tipo
    echo "Diferente: " .($num1 != $num2). "<br>";
    echo "Diferente: " .($num1 <> $num2). "<br>";
    echo "Não identicos: " .($num1 !== $num2). "<br>";
    //iguais e nem do mesmo tipo
    echo "Menor: " .($num1 < $num2). "<br>";
    echo "Menor ou Igual: " .($num1 <= $num2). "<br>";
    echo "Maior: " .($num1>$num2). "<br>";
    echo "Maior ou Igual: " .($num1 >= $num2). "<br>";


  ?>

 </section>

 </body>
 </html>
