<?php

    $alunos = [];

    $alunos ["marcus"] = [
        "nome" => "Marcus Vinicius da Silva",
        "idade" => 54,
        "sexo" => "masculino",

    ];

    $alunos ["junior"] = [
        "nome" => "Junior da Silva Moraes",
        "idade" => 43,
        "sexo" => "masculino",

    ];

    $alunos ["ane"] = [
        "nome" => "Ane Dutra da Silva",
        "idade" => 15,
        "sexo" => "feminino",

    ];
    

        print "<pre>";
        print_r($alunos);
        print "</pre>";


    print "A idade do marcos é " . $alunos["marcus"];