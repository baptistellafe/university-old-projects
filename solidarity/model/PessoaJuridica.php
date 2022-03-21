<?php

Class PessoaJuridica extends Pessoa{

	//Criando Atributos
	private $cnpj;
	private $nomeFantasia;

	//Setters
	public function setCnpj($paramCnpj){
		$this->cnpj = $paramCnpj;
	}
	public function setNomeFantasia($paramNmFantasia){
		$this->nomeFantasia = $paramNmFantasia;
	}

	//Getters
	public function getCnpj(){
		return $this->cnpj;
	}
	public function getNomeFantasia(){
		return $this->nomeFantasia;
	}
	
}


?>