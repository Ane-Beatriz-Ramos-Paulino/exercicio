<?php

$times1 = array (
    "Palmeiras",
    "Internacional", 
    "Flamengo",
    "São Paulo",
    "Grêmio",
    "Atlético Paranaense",
    "Atlético Mineiro",
    "Santos",
    "Cruzeiro",
    "Botafogo",
    "Fluminense",
    "Corinthians",
    "Bahia",
    "Vasco da Gama",
    "Ceará",
    "Sport",
    "Vitória",
    "América Mineiro",
    "Chapecoense",
    "Paraná"
);

$times2 = $times1;

foreach($times1 as $time1){
   foreach($times2 as $time2){
       if($time1 == $time2){
           break;
       }
       echo $time1 . " X " . $time2 . "<br>";
   }
       
}