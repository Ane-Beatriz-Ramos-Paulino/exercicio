<?php
    class Conta{

        private $numero;
        private $cliente;

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

    }
    //correto