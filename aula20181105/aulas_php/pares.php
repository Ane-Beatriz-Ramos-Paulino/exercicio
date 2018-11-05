<?php

    $numeroInicial = 0;
    $numeroFinal = 30;

    $contador = $numeroInicial;

    echo "Os números pares entre " . $numeroInicial . " e " . $numeroFinal. " são:  <br>";

    while($contador <= $numeroFinal){
        if($contador % 2 == 0){
            echo $contador . "<br>";
        }

        $contador++;
    }