<?php
session_start();

$requisicao = $_SESSION["requisicao"]+1;

echo $requisicao;
?>