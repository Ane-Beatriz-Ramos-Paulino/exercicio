<?php

    $nome = "Ane Beatriz Ramos";
    $sexo = "Feminino";
    $idade = 21;

    if(($idade < 25) && ($sexo == "Feminino")){
        echo $nome . " ACEITA";
    }else{
        echo $nome . " NÃO ACEITA";
    }