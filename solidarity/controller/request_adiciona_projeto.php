<?php

	function getNomeProjeto(){

 		$nomeProjeto = isset($_POST['nomeProjeto'] ? $_POST['nomeProjeto'] : "");
	
		return $nomeProjeto;
 	}

	function getDescProjeto(){

 		$descProjeto = isset($_POST['descProjeto'] ? $_POST['descProjeto'] : "");
	
		return $descProjeto;
 	}

	function getValorProjeto(){
		
 		$valorProjeto = isset($_POST['valorProjeto'] ? $_POST['valorProjeto'] : "");
	
		return $valorProjeto;
	}