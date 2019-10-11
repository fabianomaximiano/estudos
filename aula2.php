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

        $i = 10; //inteiro
        $nome = "Fabiano"; //string
        $verdadeiro = TRUE; //booleano
        $valor = 100.50; //ponto Flutuante

        $valori = gettype($i);
        $valornome = gettype($nome);
        $valorverdadeiro = gettype($verdadeiro);
        $vvalor = gettype($valor);

        echo "<h2>Tipos de variaveis: </h2>";
        echo "i:" .$i."</br>";
        echo "Nome: ".$nome."<br>";
        echo "Verdadeiro: ".$verdadeiro."</br>";
        echo "Valor: ".$valor."</br>";

        echo "<hr>";
        echo "<h2>Descobrindo tipos de variaveis: </h2>";
        echo "O valor de i é: <span class='span'> ".$valori."</span></br>";
        echo "O valor de nome é i:<span class='span'> ".$valornome."</span></br>";
        echo "O valor de verdadeiro é i:<span class='span'> ".$valorverdadeiro."</span></br>";
        echo "O valor de valor é i:<span class='span'> ".$vvalor."</span></br>";

        echo "<hr>";
        echo "<h2>Tipo inteiro: </h2>";
        $decimal = 127;
        $decneg = -256;
        $octal = 077;
        $hexa = 0xF0A;

        echo "Decimal: ".$decimal."<br>";
        echo "Decimal Negativo: ".$decneg."<br>";
        echo "Octal: ".$octal."<br>";
        echo "Hexa: ".$hexa."<br>";

        
        echo "<hr>";

        if(is_string("23")){
           echo "É string\n";
        }
        var_dump(is_string($valor));
        
        //echo is_string($nome);

        echo "<hr>";
        $s1 = "Titulo \"PHP5 - GUIA DO PROGRAMADOR\"";
        $S2 = "barra invertida(\\), \$";
        $s3 = "A variavel \$s1 = $s1 sera expandida";

        //retorno das variaves 

       echo $s1. "<br>" .$s2. "<br>" .$s3;

       echo "<hr>";

       $s4 = <<< marcacao
       echo "Exemplo de exemplo sintaxe heredoc."
       \$s4 = $s4

marcacao;

       echo "$s4<br><pre>$s4</pre>";

      echo "<hr>";

      echo "Trabalhando com Arrays";

      $a = array("João", "Maria", "Pedro");
      echo "<pre>";
      print_r($a);
      echo "</pre>";
        
    ?>
    </section>
    


  </body>
</html>