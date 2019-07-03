<?php

    //Verificando se tem alguma Sessão
    if(!isset($_SESSION)){
        session_start();
    }

    //Verificando se tem usr logado
   require("verifica_session.php")

?>