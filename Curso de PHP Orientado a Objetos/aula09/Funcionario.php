<?php
require_once "Pessoa.php";

class Funcionario extends Pessoa{
//atributos
    private $setor;
    private $trabalhando;

    public function mudarTrabalho($aumento){
        $this->trabalhando = ! $this->trabalhando;
    }

//Getters e Setters
    public function getSetor(){
        return $this->setor;
    }
    public function setSetor($setor){
        $this->setor = $setor;
    }

    public function getTrabalhando(){
        return $this->trabalhando;
    }
    public function setSalario($trabalhando){
        $this->trabalhando = $trabalhando;
    }
}
?>