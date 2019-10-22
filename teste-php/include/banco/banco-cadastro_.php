<?php

/*
 * Função responsavel por listar informações armazenadas na tabela: usuarios
 */

function listaUsuarios($con) {
    $usuarios = array();

    $result = mysqli_query($con, "select * from usuario");
    while ($usuario = mysqli_fetch_assoc($result)) {
        array_push($usuarios, $usuario);
    }
    return $usuarios;
}

/*
 * Função responsavel por inserir dados na tabela: usuario
 */


function inserirUsuarios($con,$nomeCompleto, $email, $nomeUsuario, $departamento) {
    $query = "insert into usuario (nomePessoa, email, nomeUsuario, departamento)";
    $query .= "values($nomePessoa, $email, $nomeUsuario, $departamento)";;
    //print $query;
    //die;    
return mysqli_query($con, $query);
}
/*
* Função responsavel por alterar dados na tabela: usuario
*/
function alterarUsuarios($con,$nomeCompleto, $email, $nomeUsuario, $departamento){
    $query = "update usuario set nomeCompleto '{$nomeCompleto}', email = '{$email}', nomeUsuario = '{$nomeUsuario}', departamento ='{$departamento}' where  codigo = '{$id}'";
    //print $query;
    //die;
    return mysqli_query($con, $query);
}
/*
* Função responsavel por buscar dados na tabela: usuario
*/
function buscaUsuarios($con, $id){
    $query = "select * from usuario where codigo = {$id}";
    $resultado = mysqli_query($con, $query);
    return mysqli_fetch_assoc($resultado);
}
/*
 * Funçao responsavel por remover dados da tabela: usuario
 */

function removeUsuarios($con, $id){
    $query = "delete from usuario where codigo = {$id}";
    return mysqli_query($con, $query);   
}