<?php
    $email = $_POST["email"];
    $password = $_post ["senha"];

    $db_server = "curso_php_db_1";
    $db_user = "root";
    $db_password = "phprs";
    $db_database = "academia";

    $conn = new mysqli($db_server,$db_user,$db_password,$db_database);
    if($conn->conect_error){
        die("Erro ao tentar conectar no banco de dados: " . $conn->connect_error)
    }

    $sql = "SELECT * FROM users WHERE email= '".$email."' AND senha = '".$password."'";
    $result = $conn->query($sql);

    //if($result!=TRUE){
        //die("Erro ao tentar connsultar dados de usuário: " . )
    //}

    if($results->num_rows > 0){
        header("location")
    }