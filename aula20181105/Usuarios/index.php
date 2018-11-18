<?php

    $query = $_GET["q"];

?>    
<!DOCTYPE html>
<meta charset= "UTF-8">
<html>
    <head>
        <title>Usuários</title>
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

        <form action = "index.php" method = "GET">
            <input type = "text" name = "q"/>
            <input type = "submit" value = "Pesquisar"/>
        </form>


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
            if($query != ""){
                $sql .= " WHERE email LIKE '%".$query."%'";
            }
            $result = $conn->query($sql);

            if ($result->num_rows > 0){
                echo $result->num_rows ." registro(s) listado(s) <br><br>";
                echo "<a href = 'cadastroUsuarios.php'>Cadastrar Usuário</a><br><br>";

                echo "<table>";

                echo "<tr>
                        <th>ID</th>
                        <th>E-mail</th>
                        <th>Senha</th>
                        <th>Status</th>
                        <th>Excluir</th>
                       </tr>";

                while($row = $result->fetch_assoc()){

                    echo"<tr>";

                    echo "<td>". $row["id"]. "</td>";
                    echo "<td>". $row["email"]. "</td>";
                    echo "<td>". $row["senha"]. "</td>";
                    echo ($row["status"]==1)? $row["status"]."<td> O Usuário está ativo! </td>": "<td> O Usuário está desativado! </td>";
                    echo "<td>";
                    echo "<a href = 'excluirUsuario.php?id=". $row["id"] . "'>Excluir</a>";
                    echo "&nbsp;|&nbsp;";
                    echo "<a href = 'cadastroUsuarios.php?id=". $row["id"] . "'>Editar</a>";
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