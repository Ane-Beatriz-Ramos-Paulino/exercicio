<?php
    require_once("verificar_usuario_autenticado.php");
   $nome = $_POST["nome"];
   $detalhes = $_POST["detalhes"];
   $status = 0;
   if($_POST["status"] == "on"){
       $status = 1;
   }
   $id = $_POST["id"];

   require_once("criar_conexao.php");

   if($id < 1){
        $sql = "INSERT INTO tarefas";
        $sql.= " (nome,detalhes,status) ";
        $sql.= " VALUES ";
        $sql.= "('$nome','$detalhes',$status)";


   }else{
        $sql = " UPDATE tarefas";
        $sql.= " SET ";
        $sql.= " nome = '$nome' ";
        $sql.= " ,detalhes = '$detalhes' ";
        $sql.= " ,status = $status ";
        $sql.= " WHERE";
        $sql.= " id = $id";
            
        
   }
   if($conn->query($sql) === TRUE){
       echo "Registros gravado com sucesso!<br>";
   }else{
       echo "Ao tentar executar a query: <br> "; 
       echo $sql."<br><br>";
       echo "Ocorreu o seguinte erro: <br>";
       echo $conn->error;
   }

   $conn->close();
?>

<br><br>

<a href = "index.php">Voltar</a>
