<?php
    
    require_once("conta.php");
    require_once("funcoes.php");

    $conta = new Conta();
    
    $conta->setNumero("23417");
    $conta->setCliente("Ane Beatriz");

imprimir ($conta->getNumero());
imprimir ($conta->getCliente());
//correto