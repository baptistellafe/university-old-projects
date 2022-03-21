<?php

    include_once ("db.php");
    include_once ("../contoller/request_adiciona_contato.php");
    include_once ("../controller/logica_usuario.php");

    $nomeContato = getNomeContato();
    $telefoneContato = getTelefoneContato();
    $emailContato = getEmailContato();
    $assuntoContato = getAssuntoContato();
    $msgContato = getMsgContato();

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    function cadastraContato($link, $nomeContato, $telefoneContato, $emailContato, $assuntoContato, $msgContato){
        
	   $sql = "INSERT INTO `contato`(`nm_contato`, `tel_contato`, `email_contato`, `assunto_contato`, `msg_contato`)
            VALUES ('$nomeContato', '$telefoneContato', '$emailContato', '$assuntoContato', '$msgContato')";
                
        return mysqli_query($link, $sql);
    }

    if (cadastraContato($link, $nomeContato, $telefoneContato, $emailContato, $assuntoContato, $msgContato)){

        $_SESSION['sucesso'] = "Mensagem enviada com sucesso.";

        header("Location: contato.php");
    }

    else{

        $_SESSION['erro'] = "Não foi possível enviar a mensagem. Tente novamente.";
        
        header("Location: contato.php");
        //$msgErro = mysqli_error($conexao);
    }




