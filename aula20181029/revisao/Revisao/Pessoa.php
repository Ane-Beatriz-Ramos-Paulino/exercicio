<?php
    class Pessoa{
        private $nome;
        private $endereco;

        public function setNome($valor){
            $this->nome = $valor;
        }

        public function setEndereco($valor){
            $this->endereco = $valor;
        }

        public function getNome(){
           return $this->nome;
        }

        public function getEndereco(){
            return $this->endereco;
         }
    }