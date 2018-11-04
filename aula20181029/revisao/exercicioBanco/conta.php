<?php
    class Conta{

        private $numero;
        private $cliente;
        protected $saldo;

       public function setNumero($valor){
           $this->numero = $valor;
       }

       public function getNumero(){
           return $this->numero;
       }

       public function setCliente($nome){
        $this->cliente = $nome;
    }

    public function getCliente(){
        return $this->cliente;
    }

    public function setSaldo($valor){
        $this->saldo = $valor;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function sacar($valor){
        $this->saldo -= $valor;
    }

    public function depositar($valor){
        $this->saldo += $valor;
    }

    }
    