<?php

   $email = $_POST["email"];
   $password = $_POST["senha"];
   $status = $_POST["status"];
   $id = $_POST["id"];

   $servidor = "cursophp_db_1";
   $usuario = "root";
   $senha = "phprs";
   $banco = "curso_php";

   $conn = new mysqli($servidor, $usuario, $senha, $banco);

   if ($conn->conect_error){
       die("Erro de conexão" . $conn->conect_error);
   }

   if($id > 0){

        $sql = " UPDATE usuarios SET ";
        $sql.= " email = '" . $email."' ";
        $sql.= " ,senha = '" . $password."' ";
        $sql.= " ,status = " . $status." ";
        $sql.= " WHERE id = " .$id;


   }else{
        $sql = "INSERT INTO usuarios";
        $sql.= " (email,senha,status) ";
        $sql.= " VALUES ";
        $sql.= "('".$email."',";
        $sql.= "'".$password."',";
        $sql.="".$status.")";
   }
   if($conn->query($sql) === TRUE){
       echo "Dados inseridos com sucesso!<br>";
   }else{
       echo "Erro ao tentar inserir dados: " . $conn->error;
   }

   $conn->close();
?>
<a href = "index.php">Voltar</a>
