<?php

	session_start();

	function verificaQuemEstaLogado(){

    	return isset($_SESSION["usuario_logado"]);
	}

	function verificaLogado(){

    	if(!verificaQuemEstaLogado()){

        	header ("Location: login.php");

        	die();
    	}
    }

	function logout(){
        
    	session_destroy();
	} 
