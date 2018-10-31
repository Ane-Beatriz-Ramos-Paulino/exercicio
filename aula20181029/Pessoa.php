<?php
class Pessoa{
    private $nome;
    public function __construct($nome){
        $this->setNome($nome);
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
}
$Pedro = new Pessoa("Pedro");
echo "<p>O nome da pessoa é: ". $Pedro->getNome()."</p>";
class Funcionario extends Pessoa{
    private $salario;
    public function setSalario($valor){
        $this->salario = $valor;
    }
    public function getSalario(){
        return $this->salario;
    }
}
$Tiago = new Funcionario('Tiago');
$Tiago->setSalario(1000);
echo "<p>O salario so Tiago é ".$Tiago->getSalario()."</p>";