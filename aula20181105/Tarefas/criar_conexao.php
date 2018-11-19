<?php
     $servidor = "cursophp_db_1";
     $usuario = "root";
     $senha = "phprs";
     $banco = "curso_php";

     $conn = new mysqli($servidor, $usuario, $senha, $banco);

     if ($conn->conect_error){
         die("Erro de conexão" . $conn->conect_error);

     }
