<?php

    include("conexao.php");

    $sql = "SELECT * FROM agendamentos";
    $result = $conexao->query($sql) or die($conexao->error);

    mysqli_close($conexao);
    
?>