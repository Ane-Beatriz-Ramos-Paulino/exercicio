<?php
        class usuario{
            public $id;
            public $nomeCompleto;
            public $login;
            public $senha;

        }

        $usuario = new usuario();

        $usuario->id = 1;
        $usuario->nomeCompleto = "Ane Beatriz";
        $usuario->login = "ane.b2010@gmail.com";
        $usuario->senha = "pantera";

        echo $usuario->id;
        echo $usuario->nomeCompleto;
        echo $usuario->login;
        echo $usuario->senha;
        
 