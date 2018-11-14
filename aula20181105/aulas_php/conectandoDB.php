<?php

    $servidor = "cursophp_db_1";
    $usuario = "root";
    $senha = "phprs";
    $banco = "curso_php";

    $conn = new mysqli($servidor, $usuario, $senha, $banco);

    if ($conn->conect_error){
        die("Erro de conexão" . $conn->conect_error);

    }

    $sql = "SELECT * FROM `usuarios`";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        echo $result->num_rows ." registro(s) listado(s) <br>";

        while($row = $result->fetch_assoc()){
            echo "ID: ". $row["id"]. "<br>";
            echo "E-mail: ". $row["email"]. "<br>";
            echo "Senha: ". $row["senha"]. "<br>";
            echo "<hr>";
        }

    }else{
        echo " Ele não retornou nenhum registro! <br>";
    
    }
    $conn->close();