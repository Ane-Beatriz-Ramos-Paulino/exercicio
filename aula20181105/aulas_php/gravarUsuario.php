<?php

   $email = $_POST["email"];
   $password = $_POST["senha"];
   $status = $_POST["status"];

   $servidor = "cursophp_db_1";
   $usuario = "root";
   $senha = "phprs";
   $banco = "curso_php";

   $conn = new mysqli($servidor, $usuario, $senha, $banco);

   if ($conn->conect_error){
       die("Erro de conexão" . $conn->conect_error);
   }

   $sql = "INSERT INTO usuarios";
   $sql.= " (email,senha,status) ";
   $sql.= " VALUES ";
   $sql.= "('".$email."',";
   $sql.= "'".$password."',";
   $sql.="".$status.")";

   if($conn->query($sql) === TRUE){
       echo "Dados inseridos com sucesso!<br>";
   }else{
       echo "Erro ao tentar inserir dados: " . $conn_error;
   }

   $conn->close();
?>
<a href = "conectandoDB.php">Voltar</a>
