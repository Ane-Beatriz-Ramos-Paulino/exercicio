<?php

    echo "Os dados enviados foram: <br><br>";
    echo "Nome: ". $_POST["nome"] . "<br>";
    echo "Período: ". $_POST["periodo"] . "<br>";
    echo "Matérias: ";

    foreach($_POST[materias] as $materia){
        echo  $materia . ", ";
    }

    echo "<br>";
    echo "Bio do Aluno: ". $_POST["biografia"] . "<br>";
    echo "E-mail: " . $_POST["email"] . "<br>";
    echo "Senha: " . $_POST["senha"] . "<br>";
    echo "<hr>";