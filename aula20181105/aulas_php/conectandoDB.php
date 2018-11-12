<?php

    $servidor = "cursophp_db_1";
    $usuario = "root";
    $senha = "phprs";
    $banco = "curso_php";

    $conn = new mysqli($servidor, $usuario, $senha);

    if ($conn->conect_error){
        die("Erro de conexão" . $conn->conect_error);

    }

    $sql = "SELECT * FROM 'tarefas'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        echo "Número de registros retornados: " . $result->num_rows;

    }else{
        echo " Ele não retornou nenhum registro!";
    
    }
    $conn->close();