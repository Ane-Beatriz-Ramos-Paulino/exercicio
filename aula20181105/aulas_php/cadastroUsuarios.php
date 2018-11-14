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
            <input type = "text" name="email"/><br>

            <label>Senha</label><br>
            <input type = "password" name="senha"/><br>

            <label>Status</label><br>
            <input type = "radio" name = "status" value = "1"/>Ativado
            <input type = "radio" name = "status" value = "0"/>Desativado
            
            <br><br>

            <input type = "submit" value = "Cadastrar Usuário"/><br>
        </form>
    </body>
</html>