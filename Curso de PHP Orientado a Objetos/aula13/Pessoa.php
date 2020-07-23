<?php

abstract class Pessoa{

    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

//construct
    public function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }

    protected function ganharExperiencia($n){
        $this->experiencia  += $n;
    }

//getters e setters
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getExperiencia(){
        return $this->experiencia;
    }
    public function setExperiencia($experiencia){
        $this->experiencia = $experiencia;
    }

    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
}