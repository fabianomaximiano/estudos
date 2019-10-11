!DOCTYPE html>
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
    
    <form action="post.php" method="post">
    <p>
    
        Nome: <input type="text"  name="username" value="Fabiano Maximiano" />
    
    </p>
    <p>
    
        Email: <input type="text" name="email" value="fabiano@maximiano.com.br" />
    
    </p>
    <p>
    
    <input type="submit" value="Enviar Form!" />

</p>
    
    </section>

<?php 

    echo $_POST["username"];
    echo "<br>";
    echo $_POST["email"];


?>

  </body>
  </html>