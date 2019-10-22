<?php


/*
 * Função responsavel por inserir dados na tabela: usuario
 */


function inserirUsuarios($con, $nome, $nomeUsuario, $email, $codDepartamento, $codEquipamento) {
    $query = "insert into usuario (nomeCompleto, nomeUsuario, email, codDepartamento, codEquipamento)";
    $query .= "values($nome, $nomeUsuario, $email, $codDepartamento, $codEquipamento)";
    print($query);
    die;

return mysqli_query($con, $query);
}

