<?php
session_start();

    $requisicao = $_POST["requisicao"];

    $_SESSION["requisicao"] = $requisicao;

    echo $requisicao;
?>

<a href = "teste3session.php"> Terceira Página </a>