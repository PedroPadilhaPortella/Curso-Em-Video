<?php
require_once "Animal.php";

class Mamifero extends Animal{
    private $corPelo;

    public function locomover(){
        echo "<p>Caminhar</p>";
    }
    public function alimentar(){
        echo "<p>Mamando</p>";
    }
    public function emitirSom(){
        echo "<p>Som de Mamifero</p>";
    }

//getters e setters
    function getCorPelo(){
        return $this->corPelo;
    }
    function setCorPelo($corPelo){
        $this->corPelo = $corPelo;
    }
}