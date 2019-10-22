<?php

/*
 * Função responsavel por listar informações armazenadas na tabela: TblTipos
 */

function listaPessoas($con) {
    $pessoas = array();

    $result = mysqli_query($con, "select * from tblPessoa");
    while ($pessoa = mysqli_fetch_assoc($result)) {
        array_push($pessoas, $pessoa);
    }
    return $pessoas;
}

/*
 * Função responsavel por inserir dados na tabela: tblPessoa
 */


function inserirPessoa($con,$nomePessoa,$emailPessoa,$codSexo,$rgPessoa,$cpfPessoa,$celularPessoa,$TelefonePessoa,$enderecoPessoa,$numeroPessoa,$bairroPessoa,$cepPessoa,$cidadePessoa, $ufPessoa) {
    $query = "insert into tblPessoa (nomePessoa, emailPessoa, codSexo, rgPessoa, cpfPessoa, celularPessoa, TelefonePessoa, enderecoPessoa,numeroPessoa,bairroPessoa, cepPessoa, cidadePessoa, ufPessoa)";
    $query .= "values($nomePessoa, $emailPessoa, $codSexo, $rgPessoa, $cpfPessoa, $celularPessoa, $TelefonePessoa, $enderecoPessoa,$numeroPessoa,$bairroPessoa, $cepPessoa, $cidadePessoa, $ufPessoa)";
    //print $query;
    //die;    
return mysqli_query($con, $query);
}
/*
* Função responsavel por alterar dados na tabela: tblPessoa
*/
function alterarPessoa($con, $id, $nomePessoa, $emailPessoa, $codSexo, $rgPessoa, $cpfPessoa, $celularPessoa, $TelefonePessoa, $enderecoPessoa,$numeroPessoa, $bairroPessoa, $cepPessoa, $cidadePessoa, $ufPessoa){
    $query = "update tblPessoa set nomePessoa = '{$nomePessoa}', emailPessoa = '{$emailPessoa}', codSexo = '{$codSexo}', rgPessoa = '{$rgPessoa}', cpfPessoa = '{$cpfPessoa}', celularPessoa = '{$celularPessoa}', TelefonePessoa = '{$TelefonePessoa}', enderecoPessoa = '{$enderecoPessoa}',numeroPessoa = '{$numeroPessoa}',bairroPessoa = '{$bairroPessoa}', cepPessoa = '{$cepPessoa}', cidadePessoa = '{$cidadePessoa}', ufPessoa = '{$ufPessoa}' where  codPessoa = '{$id}'";
    //print $query;
    //die;
    return mysqli_query($con, $query);
}
/*
* Função responsavel por buscar dados na tabela: tblPessoa
*/
function buscaPessoa($con, $id){
    $query = "select * from tblPessoa where codPessoa = {$id}";
    $resultado = mysqli_query($con, $query);
    return mysqli_fetch_assoc($resultado);
}
/*
 * Funçao responsavel por remover dados da tabela: TblPessoa
 */

function removePessoa($con, $id){
    $query = "delete from tblPessoa where codPessoa = {$id}";
    return mysqli_query($con, $query);   
}