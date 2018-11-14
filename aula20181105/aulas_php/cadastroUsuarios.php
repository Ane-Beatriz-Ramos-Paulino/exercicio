<?php

    $idUsuario = $_GET["id"];

    if( $idUsuario > 0){
        $servidor = "cursophp_db_1";
        $usuario = "root";
        $senha = "phprs";
        $banco = "curso_php";

        $conn = new mysqli($servidor, $usuario, $senha, $banco);

        if ($conn->conect_error){
            die("Erro de conexão" . $conn->conect_error);
        }

        $sql = "SELECT * FROM usuarios WHERE id = " . $idUsuario;

        $result = $conn->query($sql);
        if($result->num_rows > 0){

            $row = $result->fetch_assoc();
            $id = $row["id"];
            $email = $row["email"];
            $password = $row["senha"];
            $status = $row["status"];
        }


    }
?>


<!DOCTYPE html>
<meta charset = "UTF-8">
<html>
    <head>
        <title>Cadastro de usuários</title>
    </head>
    <body>

        <h1>Cadastro de usuários</h1>
        
        <form action = "gravarUsuario.php" method = "POST">
            <label>E-mail</label><br>
            <input type = "text" name="email" value = "<?=$email?>"/><br>

            <label>Senha</label><br>
            <input type = "password" name="senha" value = "<?=$password?>"/><br>

            <label>Status</label><br>
            <input type = "radio" name = "status" value = "1" <?=$row["status"]==1?"CHECKED":"";?>/>Ativado
            <input type = "radio" name = "status" value = "0" <?=$row["status"]==0?"CHECKED":"";?>/>Desativado
            
            <br><br>

            <input type = "submit" value = "Cadastrar Usuário"/><br>
        </form>
    </body>
</html>