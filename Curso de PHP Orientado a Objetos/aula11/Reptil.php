<?php
require_once "Animal.php";

class Reptil extends Animal{
    private $corEscamas;

    public function locomover(){
        echo "<p>Rastejar</p>";
    }
    public function alimentar(){
        echo "<p>Comendo Vegetais</p>";
    }
    public function emitirSom(){
        echo "<p>Som de Réptil</p>";
    }

//getters e setters
    function getCorEscamas(){
        return $this->corEscamas;
    }
    function setCorEscamas($corEscamas){
        $this->corEscamas = $corEscamas;
    }
}