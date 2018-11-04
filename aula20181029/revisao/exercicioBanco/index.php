<?php
    
    require_once("conta.php");
    require_once("funcoes.php");
    require_once("ContaCorrente.php");
    require_once("ContaPoupanca.php");

    $conta = new Conta();
    
    $conta->setNumero("23417");
    $conta->setCliente("Ane Beatriz");
    $conta->setSaldo(1000);
    $conta->sacar(23);
    $conta->depositar(100);

    $contaCorrente = new ContaCorrente();
    $contaCorrente->setCreditoPessoal(10000);
    $contaCorrente->usarCredito(200);
    $contaCorrente->pagarCredito(50);


    $contaPoupanca = new ContaPoupanca();
    

    imprimir ("O Número da conta é: " .$conta->getNumero());
    imprimir ("O Cliente é: " .$conta->getCliente());
    imprimir ("O limite de Crédito Pessoal atual é: " .$contaCorrente->getCreditoPessoal());
    imprimir ("O rendimento atual da Poupança é : " .$contaPoupanca->calculaJuros($conta->getSaldo()));
    imprimir ("O saldo atual é: " .$conta->getSaldo());

    
    