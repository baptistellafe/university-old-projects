<?php

	function getId(){

 		$id = isset($_POST['idProjeto'] ? $_POST['idProjeto'] : "");
	
		return $id;
	}

	function getDoacao(){
		
		$doacao = $_POST['valorDoacao'] ? $_POST['valorDoacao'] : "");
	
		return $doacao;
	}