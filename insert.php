<?php

    include("conexao.php");

    $nome = $_POST['txtNome'];
    $telefone = $_POST['txtTelefone'];
    $origem = $_POST['txtOrigem'];
    $data_contato = $_POST['txtDataContato'];
    $observacao = $_POST['txtObservacao'];

    // Inserindo dados ao banco de dados
    $sql = "INSERT INTO agendamentos (nome, telefone, origem, data_contato, observacao) 
    VALUES ('$nome', '$telefone', '$origem', '$data_contato', '$observacao')";

    $result = mysqli_query($conexao, $sql);
    
    // if(mysqli_query($conexao, $sql) == true) {
    //     echo "Agendamento cadastrado com sucesso!";
    // } else {
    //     echo "Erro: " . mysqli_connect_error($conexao);
    // }

    header('Location: index.php');

    mysqli_close($conexao);
    
?>                            