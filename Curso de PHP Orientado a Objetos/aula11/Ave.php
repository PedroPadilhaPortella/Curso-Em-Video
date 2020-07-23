<?php

require_once "Animal.php";

class Ave extends Animal{
    private $corPenas;

    public function locomover(){
        echo "<p>Voar</p>";
    }
    public function alimentar(){
        echo "<p>Comendo Minhocas</p>";
    }
    public function emitirSom(){
        echo "<p>Som de Ave</p>";
    }
    public function fazerNinho(){
        echo "<p>Fazendo Ninho</p>";
    }

//getters e setters
    function getCorPenas(){
        return $this->corPenas;
    }
    function setCorPenas($corPenas){
        $this->corPenas = $corPenas;
    }
}