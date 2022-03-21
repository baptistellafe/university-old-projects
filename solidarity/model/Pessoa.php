<?php

Class Pessoa{

	//Criando Atributos
	private $nome;
	private $endereco;
	private $bairro;
	private $cidade;
	private $cep;
	private $telefone;
	private $email;
	private $senha;
	private $idPerfil;

	//Criando construtor que recebe os atributos como parâmetros
	public function __construct($paramNome, $paramEndereco, $paramBairro, $paramCidade, $paramCep, $paramTelefone, $paramEmail, $paramSenha, $paramIdPerfil){

	//Atribuindo os parâmetros a seus devidos atributos
		$nome  = $paramNome;
		$endereco = $paramEndereco;
		$bairro = $paramBairro;
		$cidade = $paramCidade;
		$cep = $paramCep;
		$telefone = $paramTelefone;
		$email = $paramEmail;
		$senha = $paramSenha;
		$idPerfil = $paramIdPerfil;	
	}

	public function getNome(){
		return $this->nome;
	}
	public function getEndereco(){
		return $this->endereco;
	}
	public function getBairro(){
		return $this->bairro;
	}
	public function getCidade(){
		return $this->cidade;
	}
	public function getCep(){
		return $this->cep;
	}
	public function getTelefone(){
		return $this->telefone;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getSenha(){
		return $this->senha;
	}
	public function getIdPerfil(){
		return $this->idPerfil;
	}




}

?>