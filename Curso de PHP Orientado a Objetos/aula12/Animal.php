<?php

abstract class Animal{
//atributos
    protected $peso;
    protected $idade;
    protected $membros;

    abstract function emitirSom();

//getters e setters
    function getPeso(){
        return $this->peso;
    }
    function setPeso($peso){
        $this->peso = $peso;
    }

    function getIdade(){
        return $this->idade;
    }
    function setIdade($idade){
        $this->idade = $idade;
    }

    function getMembros(){
        return $this->membros;
    }
    function setMembros($membros){
        $this->membros = $membros;
    }
}