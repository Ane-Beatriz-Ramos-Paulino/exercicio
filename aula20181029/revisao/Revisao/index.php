<?php
        require_once("Pessoa.php");
        require_once("Funcoes.php");
        require_once("Funcionarios.php");

        $pessoa1 = new Pessoa();
        $pessoa1->setNome("Ane");
        $pessoa1->setEndereco("Barueri");
        imprimir($pessoa1->getNome());
        imprimir($pessoa1->getEndereco());

        $funcionario1 = new Funcionario();
        $funcionario1->setSalario("10000.00");
        $funcionario1->setDepartamento("Desenvolvimento Magento");
        imprimir($funcionario1->getSalario());
        imprimir($funcionario1->getDepartamento());