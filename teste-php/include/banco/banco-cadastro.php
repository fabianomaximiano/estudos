<?php
/*
 * Funcao responsavel  por listar usuarios e seus equipamentos.
 */ 

function lista_usuarios($con){
	$usuarios = array();
	
	// consulta simplificada
	//$resultado = mysqli_query($con, "select * from usuario");

	$resultado = mysqli_query($con, "select u.codigo, u.nomeCompleto, u.nomeUsuario, d.nomeDepartamento, u.nomeUsuario, u.email from usuario u
		join departamento d
		on u.codigo = d.codigo");

	// join completo
	// $resultado = mysqli_query($con,"select e.nomeEstacao, u.nomeUsuario, e.numeroIp d.nomeDepartamento, s.nomeSO from usuario u join departamento d
	// 	on u.codigo = d.codigo 
	// 	join equipamento e
	// 	on u.codigo = e.codigo 
	// 	join SO s 
	// 	on s.codigo = e.codSO");
	
	//var_dump($usuarios);
	//die;



	while($usuario = mysqli_fetch_assoc($resultado)) {
		array_push($usuarios, $usuario);
	}
	return $usuarios;
}

/*
 * Função responsavel por inserir dados na tabela: usuario
 */


function inserirUsuarios($con, $nome, $nomeUsuario, $email, $codDepartamento, $codEquipamento) {
	$query = "insert into usuario (nomeCompleto, nomeUsuario, email, codDepartamento, codEquipamento)";
	$query .= "values('$nome', '$nomeUsuario', '$email', $codDepartamento, $codEquipamento)";
    //print($query);
    //die;

	return mysqli_query($con, $query);

}

/*
* Função responsavel por alterar dados de usuarios */
function altUsuarios($con, $id, $nome, $nomeUsuario, $email, $codDepartamento, $codEquipamento){
    $query = "update usuario set nomeCompleto = '{$nome}', nomeUsuario = '{$nomeUsuario}', email = '{$email}', codDepartamento = {$codDepartamento}, codEquipamento = {$codEquipamento} where codigo = {$id}";
    //print $query;
    //die;

    return mysqli_query($con, $query);

}

/*
* Função responsavel por buscar dados da tabela TblUsuarios
*/

function buscaUsuario($con, $id){
    $query = "select * from usuario where codigo = {$id}";
    $resultado = mysqli_query($con, $query);
    return mysqli_fetch_assoc($resultado);
}

/*
 * Funçao responsavel por remover dados da tabela: TblUsuarios
*/
function removeUsuarios($con, $id){
    $query = "delete from usuario where codigo = {$id}";
    return mysqli_query($con, $query);
    
}

/*
*
*/

function geraJason($con){
	$query = mysql_query('select * from table'); // aplique o seu metodo de recuperacao de dados
	header('Content-type: application/json'); // cabecalho para o navegador saber que estah retornando um json
	echo json_encode($con, $query); // json_encode transforma qualquer tipo de objeto no formato json
	exit;
}