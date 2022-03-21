<?php

	include_once ("db.php");
	include_once ("../controller/logica_usuario.php");

	$nomeProjeto = getNomeProjeto();
	$descProjeto = getDescProjeto();
	$valorProjeto = getValorProjeto();

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	function cadastraProjeto($link, $nomeProjeto, $descProjeto, $valorProjeto){

    	$sql = "INSERT INTO `projetos`(`nm_projeto`, `ds_projeto`, `			vl_total_projeto`) 
        		VALUES ('$nomeProjeto','$descProjeto',$valorProjeto)";
    
    	return mysqli_query($link, $sql);
	}

	function listaProjetos($link){

        $projetos = array();
    
    	$sql = "select * from projetos";
    
    	$resultado = mysqli_query($link, $sql);
    
    	while($projeto = mysqli_fetch_assoc($resultado)){

        	array_push($projetos, $projeto);
   		}
    	
    	return $projetos;
	}

	function selecionaPorId($link, $id){

    	$sql = "select * from projetos where id_projeto = '$id' ";

    	$resultado = mysqli_query($link, $sql);

    	return mysqli_fetch_assoc($resultado);
	}

	function adicionaDoacao($link, $id, $valorDoacao){

    	$sql = " UPDATE `projetos` SET `vl_arrecadado_projeto`= '$valorDoacao' 		WHERE id_projeto = '$id' ";

    	return mysqli_query($link, $sql);
    }

	if(cadastraProjeto($link, $nomeProjeto, $descProjeto, $valorProjeto)){

    	$_SESSION['sucesso'] = "Projeto cadastrado com sucesso.";

    	header("Location: cadastro-projeto.php");
	}

	else{

    	$_SESSION['erro'] = "Não foi possível efetuar o cadastro. Tente novamente.";

    	header("Location: cadastro-projeto.php");
    	//$msgErro = mysqli_error($conexao);
    }


