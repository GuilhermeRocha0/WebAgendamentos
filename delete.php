<?php

    include("conexao.php");

    if(!empty($_GET['id'])) {

        $id = $_GET['id'];

        $sql = "SELECT *  FROM agendamentos WHERE id=$id";
        $result = $conexao->query($sql) or die($conexao);

        // print_r($result);

        if($result->num_rows > 0) {
            $sqlDelete = "DELETE FROM agendamentos WHERE id = $id";
            $resultDelete = $conexao->query($sqlDelete) or die($conexao);
        }
        
    }
    
    header('Location: consultar.php');

    mysqli_close($conexao);

?>