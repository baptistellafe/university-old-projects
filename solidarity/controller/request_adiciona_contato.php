<?php 

 	function getNomeContato(){

 		$nomeContato = isset($_POST['nomeContato'] ? $_POST['nomeContato'] : "");
	
		return $nomeContato;
 	}

	function getTelefoneContato(){

 		$telefoneContato = isset($_POST['telefoneContato'] ? $_POST['telefoneContato'] : "");
	
		return $telefoneContato;
 	}

	function getEmailContato(){

 		$emailContato = isset($_POST['emailContato'] ? $_POST['emailContato'] : "");
	
		return $emailContato;
	}

	function getAssuntoContato(){

 		$assuntoContato = isset($_POST['assuntoContato'] ? $_POST['assuntoContato'] : "");
	
		return $assuntoContato;
	}

	function getMsgContato(){
		
 		$msgContato = isset($_POST['msgContato'] ? $_POST['msgContato'] : "");
	
		return $msgContato;
	}