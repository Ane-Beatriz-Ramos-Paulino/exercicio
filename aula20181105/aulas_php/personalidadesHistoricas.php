<?php

$personalidades = array (
    "Isaac Newton",
    "Chiquinha Gonzaga",
    "Cleópatra VII",
    "Joana d’Arc",
    "Maria Quitéria",
    "Anita Garibaldi",
    "Cora Coralina",
    "Carmen Miranda",
    "Teresa de Calcutá",
    "Indira Gandhi",
    "Marilyn Monroe",
    "Benazir Bhutto",
    "Diana de Gales",
    "William Shakespeare",
    "Henry Ford",
    "Homero",
    "Sigmund Freud",
    "Confúcio",
    "Aristóteles",
    "Sócrates"
);

asort($personalidades);

echo "<br><br>Lista de Personalidades Históricas em ordem alfabética crescente: <br>";

foreach($personalidades as $personalidade){
    echo "$personalidade <br>";
}

arsort($personalidades);

echo "<br><br>Lista de Personalidades Históricas em ordem alfabética decrescente: <br>";

foreach($personalidades as $personalidade){
    echo "$personalidade <br>";
}

shuffle($personalidades);

echo "<br><br>Lista de Personalidades Históricas desordenada: <br>";

foreach($personalidades as $personalidade){
    echo "$personalidade <br>";
}