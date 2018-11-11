<?php

    $capitais = array (
        "Rio Branco",
        "Macapá",
        "Manaus",
        "Belém", 
        "Porto Velho",
        "Boa Vista",
        "Palmas",
        "Maceió",
        "Salvador",
        "Fortaleza",
        "São Luís",
        "João Pessoa",
        "Recife",
        "Teresina",
        "Natal",
        "Aracaju",
        "Goiânia",
        "Cuiabá",
        "Campo Grande",
        "Brasília",
        "Vitória",
        "Belo Horizonte",
        "São Paulo",
        "Rio de Janeiro",
        "Curitiba",
        "Porto Alegre",
        "Florianópolis"
    );

    $cidade = "São Paulo";
    
    if(in_array($cidade, $capitais)){
        echo $cidade . " é uma capital";
    }else{
        echo $cidade . " não é uma capital";
    }

    