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
            <section>


                    <?php
                    $valor = 1000; 
                    if($valor<=15) {
                    echo "Valor menor que 15";      
                    } 
                    else if($valor >15 && $valor<=100) {
                    echo "Valor entre 15 e 100";
                    } 
                    else if($valor>100 && $valor<=1000) {
                    echo "Valor maior que 100 e menor ou igual a 1000";
                    } else
                    echo "Valor acima de 1000";
                    ?>


            </section>

        </body>

</html>