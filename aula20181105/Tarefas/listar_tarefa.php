<?php
    require_once("verificar_usuario_autenticado.php");
    header("Cntent-type:text/html; charset=ISO-8859-1");

    $key = $_POST["key"];

?>    
<!DOCTYPE html>
<meta charset= "UTF-8">
<html>
    <head>
        <title>Tarefas</title>
    </head>
    <style>
        table{
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width:100%;
        }
        th,td{
            border:1px solid black;
            text-align:left;
            padding:8px;
        }
        tr:nth-child(even){
            background-color:silver;
        }
    </style>
    <body>
        
        <a href = "incluir_tarefa.php">Incluir Tarefa </a>
        
        <br><br>

        <form action = "listar_tarefas.php" method = "POST"\>
            <input type = "text" name = "key"/>
            <input type = "submit" value = "Buscar"/>
        </form>


        <?php

           require_once("criar_conexao.php");
           
            $sql = "SELECT * FROM `tarefas`";
            if($key != ""){
                $sql .= " WHERE nome LIKE '%$key%'";
            }
            $result = $conn->query($sql);

            if ($result->num_rows > 0){
                echo $result->num_rows ." registro(s) listado(s) <br><br>";
                
                echo "<table>";

                echo "<tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Detalhes</th>
                        <th>Status</th>
                        <th>Excluir | Alterar</th>
                       </tr>";

                while($row = $result->fetch_assoc()){

                    echo"<tr>";

                    echo "<td>". $row["id"]. "</td>";
                    echo "<td>". $row["nome"]. "</td>";
                    echo "<td>". $row["detalhes"]. "</td>";
                    echo ($row["status"]==1)? $row["status"]."<td> Feita! </td>": "<td> A fazer! </td>";
                    echo "<td>";
                    echo "<a href = 'excluir_tarefa.php?id=". $row["id"] . "'>Excluir</a>";
                    echo "&nbsp;|&nbsp;";
                    echo "<a href = 'incluir_tarefa.php?id=". $row["id"] . "'>Alterar</a>";
                    echo"</td>";
                    echo "</tr>";
                }
                echo "</table>";

            }else{
                echo " Ele não retornou nenhum registro! <br>";
            
            }
            $conn->close();
        ?>
    </body>
</html> 