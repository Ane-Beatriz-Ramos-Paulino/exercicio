<?php
        $alunos = [];
        if(isset($_POST["alunos"])){
            $alunos  = unserialize(base64_decode($_POST["alunos"]));
        }
        
        
        if(isset($_POST['nome'])){
            $alunos[]  = $_POST['nome'];


        print "<pre>";
        print_r($alunos);
        print "</pre>";
        }
?>        

<form action ="index.php" method ="post"> 
    <label> Nome </label><br/>
    <input type= "text" name="nome">
    <input type ="submit" value="Adicionar"><br/>
    <input type="hidden" name = "alunos" value="<?= print base64_encode(serialize($alunos))?>"/>
</form>

   
            