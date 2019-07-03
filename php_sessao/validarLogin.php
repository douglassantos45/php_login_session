<?php

    //Verificando se a Sessão está aberta
    if(!isset($_SESSION)){
        //Abrindo uma sessão
        session_start();
    }
    
    include_once('conexao.php');
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //Usando PDO
    $result = $con->prepare("SELECT email, senha FROM  usuarios WHERE email = ? AND senha = ?");

    //Passando os valores para o SELECT
    $result->bindParam(1, $_REQUEST['email']);
    $result->bindParam(2, $_REQUEST['senha']);

    //Verificando se tem retorno
    if($result->execute()){
        if($result->rowCount() > 0){
            if($_SESSION["senha"] == $row->$senha){
                $row = $result->fetch(PDO::FETCH_OBJ);

                //Expirar SESSÃO
                $tempLimit = 10;//10 segundos da sessão
                $_SESSION['registro'] = time();
                $_SESSION['limit'] = $tempLimit;

                //Bem-Vindo
                $_SESSION['sessao_usr'] = $row->nome;
                echo "Encontrado";

                exit();
            }

        } else {
            echo "Usuário Inválido";
            exit();
        }
    }

