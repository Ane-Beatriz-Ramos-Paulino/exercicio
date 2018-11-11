<?php

    $cidades = array (
        array(
         "nome"=> "São Paulo",   
        "aniversario"=>"25 de Janeiro",
        "fundacao"=> "25 de janeiro de 1554",
        "gentilico"=>"Paulistano",
        "lema"=>"Não sou conduzido, conduzo",
        "padroeiro"=>"São Paulo",
        "prefeito"=>"Bruno Covas Lopes"
        ),

        array(
            "nome"=> "Barueri",
            "aniversario"=>"26 de março",
            "fundacao"=> "11 de novembro de 1560",
            "gentilico"=>"barueriense",
            "lema"=>"Flor vermelha que encanta",
            "padroeiro"=>"Nossa Senhora da Conceição da Escada",
            "prefeito"=>" Rubens Furlan"
            ),

            array(
                "nome"=> "Jandira",
                "aniversario"=>"8 de Dezembro",
                "fundacao"=> "28 de fevereiro de 1964 ",
                "gentilico"=>"jandirense",
                "lema"=>"Se o senhor não guardar esta cidade, em vão vigiará a sentinela",
                "padroeiro"=>"São João Batista",
                "prefeito"=>"Paulo Barufi"
                ),


    );

    
foreach($cidades as $cidade){
    echo "Nome: " . $cidade[nome]. "<br>";
    echo "Aniversário: " .$cidade[aniversario]. "<br>";
    echo "Fundação: " .$cidade[fundacao]. "<br>";
    echo "Gentilico: " .$cidade[gentilico]. "<br>";
    echo "Lema: " .$cidade[lema]. "<br>";
    echo "Padroeiro: " .$cidade[padroeiro]. "<br>";
    echo "Prefeito: " .$cidade[prefeito]. "<br>";
    echo "<hr>";
}