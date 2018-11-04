<?php
    require_once("Pessoa.php");

    class Funcionario extends Pessoa{
        private $salario;
        private $departamento;

        public function setSalario($valor){
            $this->salario = $valor;
        }

        public function setDepartamento($valor){
            $this->departamento = $valor;
        }

        public function getSalario(){
           return $this->salario;
        }

        public function getDepartamento(){
            return $this->departamento;
         }

    }    