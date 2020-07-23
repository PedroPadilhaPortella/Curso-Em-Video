<?php

require_once "Animal.php";
class Mamifero extends Animal{

    public function emitirSom(){
        echo "<p>Som de Mamifero</p>";
    }
}