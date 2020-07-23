<?php

require_once "Mamifero.php";

final class Cachorro extends Mamifero{
    public function emitirSom(){
        echo "<p>Latir</p>";
    }
}