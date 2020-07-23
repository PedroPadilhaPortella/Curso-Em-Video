<?php

abstract class Pessoa{
//atributos
    protected $nome;
    protected $idade;
    protected $sexo;

    public final function fazerAniversario(){
        $this->idade ++;
    }

//Getters e Setters

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getSexo(){
        return $this->nome;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
}







