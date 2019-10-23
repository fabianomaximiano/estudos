<?php


/*
 * Função responsavel por inserir dados na tabela: equipamento
 */


function inserirEquipamento($con, $nomeEstacao, $numeroIp, $numeroSerie, $nomeFabricante, $dominio, $tipoHardware, $codSO, $codAntivirus) {
    $query = "insert into equipamento(nomeEstacao, numeroIp, numeroSerie, nomeFabricante, dominio, tipoHardware, codSO, codAntivirus)";
    //$query .= "values('$nomeEstacao', '$numeroIp', '$numeroSerie', '$nomeFabricante', '$dominio', '$tipoHardware', $codSO, $codAntivirus)";
    $query .= "values('$nomeEstacao', '$numeroIp', $numeroSerie, '$nomeFabricante', '$dominio', '$tipoHardware', $codSO, $codAntivirus)";
    //print($query);
    //die;

return mysqli_query($con, $query);

}

