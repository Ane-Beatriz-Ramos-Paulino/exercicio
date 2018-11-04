<?php
    require_once("conta.php");

    class ContaPoupanca extends Conta{
    

        public function calculaJuros($saldo){
            $this->juros = $saldo * 0.09;
            return $this->juros;
        }

        
    }