<?php
/* 
 * Arquivo de com informações de conexão com banco dados
 */
$con = mysqli_connect('localhost', 'root', '*timao26', 'inventario');

if (!$con) {
    printf("mostra o erro. Error: %s\n", mysqli_connect_error());
}
