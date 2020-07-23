<?php

require_once "Mamifero.php";

class Lobo extends Mamifero{
//sobreposicao do método emitirSom()
    public function emitirSom(){
        echo "<p>Auuuuuuuu!!</p>";
    }
}