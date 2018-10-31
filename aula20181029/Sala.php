<?php
class Sala{
    private $totalDeAlunos;
    public function adicionarAluno($numeroNovosAlunos){
        $this->totalDeAlunos += $numeroNovosAlunos;
    }
    public function getTotalAlunos(){
        return $this->totalDeAlunos;
    }
}
$sala1 = new Sala();
$sala1->adicionarAluno(10);
$sala1->adicionarAluno(4);
echo "Total de alunos da sala 1 é ".$sala1->getTotalAlunos();
