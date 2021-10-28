<?php
    // Definições de host, usuario, senha e database
    $hostname = "127.0.0.1";
    $database = "webagendamentos";
    $user = "root";
    $password = "";


    // Conexão com o banco de dados
    $conexao = new mysqli($hostname, $user, $password, $database);
    // if($conexao->connect_errno){
    //     die("Falha ao conectar: (" . $conexao->connect_errno . ") " . $conexao->connect_error);
    // } else{
    //     echo "Conectado ao Bando de Dados!";
    // }
?>