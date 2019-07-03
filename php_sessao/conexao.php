<?php

    $host = "localhost";
    $nome = "teste";
    $usuario = "douglas";
    $senha = "99458483";
    
    try {
        $con = new PDO("mysql:host=$host;dbname=$nome", $usuario, $senha);
    } catch (PDOException $e) {
        return array("conexao"=>null, "mensagem"=>"Ocorreu o seguinte erro:<br/>" . $e->getMessage());
    }

    $con->exec("SET CHARACTER SET utf8");