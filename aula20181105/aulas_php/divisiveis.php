<?php

$numeroInicial = 0;
$numeroFinal = 30;
$divisor = 3;
$contador = $numeroInicial;

echo "Os números divisíveis por " . $divisor." entre " . $numeroInicial . " e " . $numeroFinal. " são:  <br>";

while($contador <= $numeroFinal){
    if($contador % $divisor == 0){
        echo $contador . "<br>";
    }

    $contador++;
}