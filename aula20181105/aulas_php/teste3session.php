<?php
session_start();

    
$requisicao = $_SESSION["requisicao"]+1;

$_SESSION["requisicao"] = $requisicao;

echo $requisicao;
?>

<a href = "teste4session.php"> Quarta Página </a>
