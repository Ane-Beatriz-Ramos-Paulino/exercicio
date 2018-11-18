<?php
$servidor = "cursophp_db_1";
$usuario = "root";
$senha = "phprs";
$banco = "curso_php";

$conn = new mysqli($servidor, $usuario, $senha, $banco);
if($conn->connect_error){
    die("Erro ao tentar conectar no Banco: " . $conn->connect_error);
}

$sql = "DELETE FROM usuarios WHERE id = " . $_GET["id"];

if($conn->query($sql) === TRUE){
    echo "Registro excluído com sucesso!";
}else{
    echo "Erro ao tentar apagar registro: " . $conn->error;
}

$conn->close();

?>

<br><br>

<a href = "index.php">Voltar</a>