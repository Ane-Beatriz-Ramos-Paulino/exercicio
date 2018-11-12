<?php

    $servidor = "cursophp_db_1";
    $usuario = "root";
    $senha = "phprs";

    $conn = new mysqli($servidor, $usuario, $senha);

    if ($conn->conect_error){
        die("Erro de conexão" . $conn->conect_error);

    }else{
        echo "Conexão efetuada com sucesso";
    }