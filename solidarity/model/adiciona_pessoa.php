<?php

    include_once ("db.php");
    include_once ("../controller/logica_usuario.php");
    include_once ("../controller/request_adiciona_pessoa.php");
    include_once ("../model/Pessoa.php");
    include_once ("../model/PessoaFisica.php");
    include_once ("../model/PessoaJuridica.php");

    //Criando conexão com BD
    $objDb = new db();
    $link = $objDb->conecta_mysql();

    //Funções de Inclusão
    function cadastraPessoa ($link, Pessoa $pessoa){

        $sql = "insert into pessoa (nm_razao_pessoa, ds_end_pessoa, ds_bairro_pessoa, ds_cidade_pessoa, cep_pessoa, tel_pessoa, email_pessoa, pw_usuario, id_perfil_acesso)
                    values ('{$pessoa->getNome()}', '{$pessoa->getEndereco()}', '{$pessoa->getBairro()}', '{$pessoa->getCidade()}', '{$pessoa->getCep()}', '{$pessoa->getTelefone()}', '{$pessoa->getEmail()}', '{$pessoa->getSenha()}', '{$pessoa->getIdPerfil()}')";
            
        return mysqli_query($link, $sql);
    }

    function cadastraPF ($link, PessoaFisica $pessoa){

        $pk_fk = mysqli_insert_id($link); //Recebe o último ID inserido por uma query;
    
        $sql = "insert into pessoa_fisica (id_pf, cpf_pf, dt_nasc_pf, sexo_pf)
            values ($pk_fk, '{$pessoa->getCpf()}', '{$pessoa->getDtNasc()}', '{$pessoa->getSexo()}')";
    
        return mysqli_query($link, $sql);
    }
    function cadastraPJ ($link, PessoaJuridica $pessoa){

        $pk_fk = mysqli_insert_id($link); //Recebe o último ID inserido por uma query;
        
        $sql = "insert into pessoa_juridica (id_pj, cnpj_pj, nm_fantasia_pj)
        values ($pk_fk, '{$pessoa->getCnpj()}', '{$pessoa->getNomeFantasia()}')";
        
        return mysqli_query($link, $sql);
    }

    //Função de verificação de login
    function verificaLogin($link, $login, $senha){

        $senhaMd5 = md5($senha);

        $sql = "select * from pessoa where email_pessoa='$login' and pw_usuario='$senhaMd5'";

        $resultado = mysqli_query($link, $sql);
        
        return mysqli_fetch_assoc($resultado);
    }

    //Verifica o tipo de pessoa e chama a função correspondente

    function get_request_tipo_instituicao(){

        $tipo = $_POST['tipoInstituicao'];
    
        return $tipo;
    }

    switch (get_request_tipo_instituicao()) {

        case 'PF':

            $novaPessoa = new PessoaFisica(get_request_nome(), get_request_endereco(), get_request_bairro(), get_request_cidade(), get_request_cep(), get_request_telefone(), get_request_email(), get_request_senha(), 1);

            $novaPessoa->setCpf(get_request_cep());
            $novaPessoa->setDtNasc(get_request_dtNasc());
            $novaPessoa->setSexo(get_request_sexo());


            if(cadastraPessoa($link, $novaPessoa) && cadastraPF($link, $novaPessoa)){
                //$_SESSION['sucesso'] = "Usuário cadastrado com sucesso.";
                //header("Location: cadastro.php");
                echo "CADASTRADO!";

            }else{
                //$_SESSION['erro'] = "Não foi possível efetuar o cadastro. Tente novamente.";
                //header("Location: cadastro.php");
                $msgErro = mysqli_error($conexao);
                echo $msgErro;
            }
            break;
            
        case 'PJ':

            $novaPessoa = new PessoaJuridica(get_request_nome(), get_request_endereco(), get_request_bairro(), get_request_cidade(), get_request_cep(), get_request_telefone(), get_request_email(), get_request_senha(), 1);

            $novaPessoa->setCnpj(get_request_cnpj());
            $novaPessoa->setNomeFantasia(get_request_nomeFantasia());

            if(cadastraPessoa($link, $novaPessoa) && cadastraPJ($link, $novaPessoa)){
                //$_SESSION['sucesso'] = "Usuário cadastrado com sucesso.";
                //header("Location: cadastro-ong.php");
                echo "CADASTRADO!";

            }else{

                //$_SESSION['erro'] = "Não foi possível efetuar o cadastro. Tente novamente.";
                //header("Location: cadastro-ong.php");
                $msgErro = mysqli_error($link);
                echo $msgErro;
            }
            break;

        case 'Ong':
            $novaPessoa = new PessoaJuridica(get_request_nome(), get_request_endereco(), get_request_bairro(), get_request_cidade(), get_request_cep(), get_request_telefone(), get_request_email(), get_request_senha(), 2);

            $novaPessoa->setCnpj(get_request_cnpj());
            $novaPessoa->setNomeFantasia(get_request_nomeFantasia());

            if(cadastraPessoa($link, $novaPessoa) && cadastraPJ($link, $novaPessoa)){
                //$_SESSION['sucesso'] = "Usuário cadastrado com sucesso.";
                //header("Location: cadastro-ong.php");
                echo "CADASTRADO!";

            }else{

                //$_SESSION['erro'] = "Não foi possível efetuar o cadastro. Tente novamente.";
                //header("Location: cadastro-ong.php");
                $msgErro = mysqli_error($link);
                echo $msgErro;
            }
            break;   

        }



