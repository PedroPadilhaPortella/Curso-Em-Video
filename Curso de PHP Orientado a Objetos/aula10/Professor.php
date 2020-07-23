<?php

require_once "Pessoa.php";

class Professor extends Pessoa{
    private $salario;
    private $especialidade;

    public function receberAumento($salario){
        $this->setSalario($this->getSalario() + $salario);
    }


    public function getSalario(){
        return $this->salario;
    }
    public function setSalario($salario){
        $this->salario = $salario;
    }

    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function setEspecialidade($especialidade){
        $this->especialidade = $especialidade;
    }
}