<?php
class Automovel {
    private $velocidade;
    private $potencia;
    private $ignicao;
    public function __construct($ignicao = false) {
        $this->setIgnicao($ignicao);
    }
    public function setIgnicao($ignicao) {
        $this->ignicao = $ignicao;
    }
    public function getIgnicao() {
        if ($this->ignicao) {
            return "Ligado";
        } else {
            return "Desligado";
        }
    }
    public function setVelocidade($velocidade){
        $this->setIgnicao(true);
        $this->velocidade = $velocidade;
    }
    public function getVelocidade(){
        return $this->velocidade;
    }
    public function acelerar(){
        if($this->getIgnicao == "Ligado") {
            $velocidade = $this->getVelocidade();
            $velocidade *= 10;
            $this->setVelocidade($velocidade); 
        } else {
            echo "<br> Automóvel está desligado";
        }
        
    }
    public function frenar() {
        $velocidade = $this->getVelocidade();
        $velocidade /= 10;
        $this->setVelocidade($velocidade);
    }
}
$auto = new Automovel();
        $auto->setIgnicao(true);
        echo "<br>" .$auto->getIgnicao();
        $auto->setVelocidade(5);
        echo "<br>" .$auto->getVelocidade();
        $auto->acelerar();
        echo "<br>" .$auto->getVelocidade();
        $auto->frenar();
        echo "<br>" .$auto->getVelocidade();

class Barco extends Automovel {
    public function alturaDoMastro() {
    }
}
class Fusca extends Automovel {
    private $combustivel;
}
class Aviao extends Automovel {
    private $tempoDeVooTanqueCheio;
}

    $tomover = new Automovel();
    $fuca = new Fusca();
    $trem = new Aviao();
    $tomover->setVelocidade(2);
    $fuca->setVelocidade(20);
    $trem->setVelocidade(200);
    echo "<p>Velocidade do tomover:" . $tomover->getVelocidade();
    echo "<p>Velocidade do fuca:" . $fuca->getVelocidade();
    echo "<p>Velocidade do trem:" . $trem->getVelocidade();
    $tomover->acelerar();
    $tomover->acelerar();
    $tomover->acelerar();
    echo "<p>Velocidade do tomover:" . $tomover->getVelocidade();
