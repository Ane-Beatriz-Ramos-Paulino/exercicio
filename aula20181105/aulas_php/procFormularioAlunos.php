<?php

    echo "Os dados enviados foram: <br><br>";
    echo "Nome: ". $_POST["nome"] . "<br>";
    echo "Período: ". $_POST["periodo"] . "<br>";
    echo "Matérias: ";

    foreach($_POST[materias] as $materia){
        echo  $materia . ", ";
    }

    echo "<hr>";