<?php

    if(!isset($_SESSION)){
        session_start();
    }

     //Verificando se o usuário existe
     if(!$_SESSION["sessao_usr"]){
        header("Location:index.php");
    }

    //Verificando se o registro está ativo
    if($_SESSION['registro']){
        $segundos = time() - $_SESSION['registro'];
    }

    //Verificando o tempo de SESSÃO
    if($segundos > $_SESSION['limit']){
        unset($_SESSION["registro"]);
        unset($_SESSION["limit"]);
        unset($_SESSION["sessao_usr"]);

        session_destroy();
        header("Location:index.php");
    } else {
        $_SESSION['registro'] = time();
    }

