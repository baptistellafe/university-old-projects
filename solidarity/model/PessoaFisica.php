<?php

Class PessoaFisica extends Pessoa{

	//Criando Atributos
	private $cpf;
	private $dtNasc;
	private $sexo;

	//Setters
	public function setCpf($paramCpf){
		$this->cpf = $paramCpf;
	}
	public function setDtNasc($paramDtNasc){
		$this->dtNasc = $paramDtNasc;
	}
	public function setSexo($paramSexo){
		$this->sexo = $paramSexo;
	}

	//Getters
	public function getCpf(){
		return $this->cpf;
	}
	public function getDtNasc(){
		return $this->dtNasc;
	}
	public function getSexo(){
		return $this->sexo;
	}

	
}


?>