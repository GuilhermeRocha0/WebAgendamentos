<?php

    include("conexao.php");

    if(!empty($_GET['id'])) {

        $id = $_GET['id'];

        $sql = "SELECT * FROM agendamentos WHERE id = $id";
        $result = $conexao->query($sql) or die($conexao);

        // print_r($result);

        if($result->num_rows > 0) {
            while($data = mysqli_fetch_assoc($result)) {
                // Nomes dentro dos [''] são os nomes das colunas no banco de dados
                $id = $data['id'];
                $nome = $data['nome'];
                $telefone = $data['telefone'];
                $origem = $data['origem'];
                $data_contato = $data['data_contato'];
                $observacao = $data['observacao'];
            }
            // print_r($nome);
        } 
        else {
            header('Location: consultar.php');
        }
    }
    else {
        header('Location: consultar.php');
    }

    mysqli_close($conexao);

?>