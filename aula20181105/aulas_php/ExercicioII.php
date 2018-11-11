<?php

    $numero = 10;

    
            $div10 = $numero % 10 == 0;
            $div5 = $numero % 5 == 0;
            $div2 = $numero % 2 == 0;

            if (!$div10 && !$div5 && !$div2){

                echo "$numero não é divisível por nenhum dos números( 2, 5 e 10)";

            }elseif ($div10 && $div5 && $div2){

                echo "$numero é divisível pelos três números( 2, 5 e 10)";

            }else{
                if ($div10)
                    echo "$numero é divisível por 10 <br>";

                if ($div5)
                    echo "$numero é divisível por 5 <br>";

                if ($div2)
                    echo "$numero é divisível por 2 <br>";

            }