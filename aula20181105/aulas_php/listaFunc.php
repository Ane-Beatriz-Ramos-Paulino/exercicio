<?php

    $contador = 0;
    $func = array(
        "Ane",
         "Jorge", 
         "Pedro", 
         "Franciele",
         "Manassés" , 
         "André", 
         "Danilo", 
         "Nathaly", 
         "Brunna", 
         "Amanda", 
         "Dulce"
        );

        do {
            echo $contador . " - " . $func[$contador] . "<br>";
            $contador++;
        }while($contador < count($func));

  