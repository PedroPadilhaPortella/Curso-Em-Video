<?php

require_once "Animal.php";

class Peixe extends Animal{
    private $corEscamas;

    public function locomover(){
        echo "<p>Nadar</p>";
    }
    public function alimentar(){
        echo "<p>Comendo Algas</p>";
    }
    public function emitirSom(){
        echo "<p>Peixe não faz som</p>";
    }
    public function soltarBolhas(){
        echo "<p>°° ° Blup Blup °° °</p>";
    }

//getters e setters
    function getCorEscamas(){
        return $this->corEscamas;
    }
    function setCorEscamas($corEscamas){
        $this->corEscamas = $corEscamas;
    }
}