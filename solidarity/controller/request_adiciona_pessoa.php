<?php

//Variaveis globais de Pessoa
function get_request_nome(){
	$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
		
	return $nome;
}

function get_request_endereco(){
	$endereco = isset($_POST['endereco']) ? $_POST['endereco'] : "";
		
	return $endereco;
}

function get_request_bairro(){
	$bairro = isset($_POST['bairro']) ? $_POST['bairro'] : "";
		
	return $bairro;
}

function get_request_cidade(){
	$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : "";
		
	return $cidade;
}

function get_request_cep(){
	$cep = isset($_POST['cep']) ? $_POST['cep'] : "";
		
	return $cep;
}

function get_request_telefone(){
	$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : "";
		
	return $telefone;
}

function get_request_email(){
	$email = isset($_POST['email']) ? $_POST['email'] : "";
		
	return $email;
}

function get_request_senha(){
	$senha = isset($_POST['senha']) ? md5($_POST['senha']) : "";
		
	return $senha;
}

//Variaveis globais de Pessoa Fisica
function get_request_cpf(){
	$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : "";
	
	return $cpf;
}

function get_request_dtNasc(){
	$dtNasc = isset($_POST['dtNasc']) ? $_POST['dtNasc'] : "";
	
	return $dtNasc;

}

function get_request_sexo(){
	$sexo = isset($_POST['sexo']) ? $_POST['sexo'] : "";

	
	return $sexo;
}

//Variaveis globais de Pessoa Juridica
function get_request_cnpj(){
	$cnpj = isset($_POST['cnpj']) ? $_POST['cnpj'] : "";
		
	return $cnpj;
}

function get_request_nomeFantasia(){
	$nomeFantasia = isset($_POST['nomeFantasia']) ? $_POST['nomeFantasia'] : "";

	return $nomeFantasia;
}

?>