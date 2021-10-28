<?php

    include("conexao.php");


    if(isset($_POST['btnUpdate'])) {

        $id = $_POST['txtId'];
        $nome = $_POST['txtNome'];
        $telefone = $_POST['txtTelefone'];
        $origem = $_POST['txtOrigem'];
        $data_contato = $_POST['txtDataContato'];
        $observacao = $_POST['txtObservacao'];

        $sql = "UPDATE agendamentos SET 
            nome ='$nome',
            telefone = '$telefone',
            origem ='$origem',
            data_contato ='$data_contato',
            observacao ='$observacao'
            WHERE id = '$id'
        ";

        $result = $conexao->query($sql) or die($conexao->error);
    }

    header('Location: consultar.php');

    mysqli_close($conexao);

?>