<?php
class Conta{
    private $cliente;
    private $saldo;
    public function __construct(Cliente $clienteInformado, $saldoInformado = 0){
        $this->cliente = $clienteInformado;
        $this->saldo = $saldoInformado;
    }
    public function depositar($valor){
        $this->saldo += $valor;
    }
    public function sacar($valor){
        $this->saldo -= $valor;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function getCliente(){
        return $this->cliente;
    }
}
class ContaPoupanca extends Conta{
    private $juros;
    public function calcula(){
        $this->$juros = getSaldo()* 0.5;
        return $this->$juros ;
    }
}
class Cliente{
    private $nome;
    private $cpf;
    public function __construct($nome, $cpf){
        $this->nome = $nome;
        $this->cpf = $cpf;
    }
    public function getNome(){
        return $this->nome;
    }
}
function imprimirLinha($conteudo){
    echo "<p>".$conteudo."</p>";
}
$cliente = new Cliente("Mateus","543.876.098-09");
$contaAlmir = new Conta($cliente, 88);
imprimirLinha("O saldo da conta do " . $contaAlmir->getCliente()->getNome() . " é de R$ " . number_format($contaAlmir->getSaldo(),2,",","."));
$cliente = new Cliente("Judas","565.876.098-09");
$contaPoupanca = new ContaPoupanca($cliente, 100);
$contaPoupanca-> calcula();
