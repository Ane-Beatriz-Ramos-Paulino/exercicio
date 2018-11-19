<?php
    require_once("verificar_usuario_autenticado.php");
    $id = $_GET["id"];

    if( $id > 0){

        require_once("criar_conexao.php");

        $sql = "SELECT * FROM tarefas";
        $sql.= " WHERE id = ".$id ;

        $result = $conn->query($sql);

        if($result->num_rows > 0){

            $row = $result->fetch_assoc();
            $id = $row["id"];
            $nome = $row["nome"];
            $detalhes = $row["detalhes"];
            $status = $row["status"];
        }elseif($id > 0){
            echo "Não existe tarefa com o ID ".$id."<br><br>";
            echo "<a href = 'index.php'>Voltar</a><br><br>";

            die(); 
        }


    }
?>


<!DOCTYPE html>
<meta charset = "UTF-8">
<html>
    <head>
        <title>Cadastro de Tarefas</title>
    </head>
    <body>

        <h1>Cadastro de Tarefas</h1>
        
        <form action = "gravar_tarefa.php" method = "POST">
            <label>Nome da Tarefa</label><br>
            <input type = "text" name="nome" value = "<?php echo $nome; ?>"/><br>

            <label>Detalhes</label><br>
            <textarea name="detalhes" ><?php echo $detalhes; ?></textarea><br>

            <label>Status</label><br>
            <input type = "checkbox" name = "status"  <?php if($status==1){ echo"checked";} ?>/><label>Concluída</label>
            
            
            <br><br>

            <input type = "submit" value = "Gravar"/><br>

            <input type = "hidden" name = "id" value = "<?php echo $id; ?>"/>

            
        </form>

        <br><br>

        <a href = "index.php">Voltar</a>
        
    </body>
</html>