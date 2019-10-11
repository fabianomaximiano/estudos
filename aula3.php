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


 <section>
    <?php 

        $a = '10'; //foi colocado com aspas '' apenas pra teste.
        $i = (int) $a;

        echo "valor de a: $a"."</br>";
        echo "valor de i: $i";
    
    ?>

    <?php echo "</br> <hr>"; ?>


<?php

    $b = true;
    $c = (int) $b;

    echo '$c = ' . $c . "<br>";
    $b = FALSE;
    $c = (int) $b;
    echo '$c = ' . $c . "<br><hr>";


?>


<?php
echo "<h2>Constantes</h2>";


    define("VALOR1", 10);
    define("FRUTA", "Manga", TRUE);
    echo "Fruta = ". fruta . "<br>";//Fruta ou FRUTA
    
    echo "Valor = " . VALOR1 . "<br>";//OK
    //echo "VALOR = " . valor . "<br>";//nao funciona
    //define ("VALOR", 990);//PROVOCA UM ERRO


?>

<?php 
echo "<br><hr>";
echo "<h2>Constantes - 2</h2>";

define ("VALOR", 100);
echo "Valor = " . VALOR ."<br>";
$c = "VALOR";
echo "Valor = " . Constant($c) . "<br>"; //valor = 100

if(defined($c)){
    echo "Constante $c esta definida";
}

echo "<br><hr>";
echo "<h2>Variaveis</h2>";

$var = "Carolina";
$nome = $var;
$Nome = &$var;
$nome = "Isabelly";
$Nome = "Anna Carolina";


echo "\$var = $var <br>";
echo "\$nome = $nome <br>";
echo "\$Nome = $Nome <br>";

echo $_SERVER['SERVER_NAME'];


echo "<br><hr>";
echo "<h2>Variaveis</h2>";

echo 'Hello ' . htmlspecialchars($_GET["nome"]) . "!";

?>
 </section>

 </body>
 </html>
