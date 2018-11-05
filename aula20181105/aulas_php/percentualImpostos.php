<?php

    $nome = "Ane Beatriz";
    $sobrenome = "Ramos Paulino";
    $salario = 2001;

    if($salario<=1000){
        echo "Uau! Você não vai pagar nada de imposto!";
    }elseif($salario<=1500){
        echo "Caramba! Você paga 10% de imposto!";
    }elseif($salario<=2000){
        echo "Caramba! Você paga 15% de imposto!";
    }else{
        echo "Caramba! Você paga 20% de imposto!";
    }

?>