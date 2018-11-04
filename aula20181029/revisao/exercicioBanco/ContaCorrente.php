<?php
    require_once("conta.php");

    class ContaCorrente extends Conta{
        private $creditoPessoal;

        public function setCreditoPessoal($valor){
            $this->creditoPessoal = $valor;
        }
 
        public function getCreditoPessoal(){
            return $this->creditoPessoal;
        }

        public function usarCredito($valor){
            $this->creditoPessoal -= $valor;
        }
    
        public function pagarCredito($valor){
            $this->creditoPessoal += $valor;
        }
    }