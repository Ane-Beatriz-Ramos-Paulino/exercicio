<?php
        require_once("Pessoa.php");
        require_once("Funcoes.php");

        $pessoa1 = new Pessoa();
        $pessoa1->setNome("Ane");
        $pessoa1->setEndereco("Barueri");
        imprimir($pessoa1->getNome());
        imprimir($pessoa1->getEndereco());