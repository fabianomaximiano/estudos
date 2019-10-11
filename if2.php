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
                    
                        $i = 10;

                        echo "Primeiro While ";
                        while($i > 0){
                            echo "$i ... ";
                            $i --;
                        }

                        //segundo laço

                        $k = 10;

                        echo "<br>Primeiro do..while: ";
                        do{
                            echo "$k ... ";
                            $k --;
                        }while($k>0);
                        echo "<br> Segundo while (não teremos nenhuma iteração";

                        while ($i>0){
                            echo "Si /";
                            $i --;
                        }

                        echo "<br> Segundo while (1 iteração ): "   ;

                        do {
                            echo "$k ... ";
                            $k--;
                        }while($k>0);



                    ?>


            </section>

        </body>

</html>