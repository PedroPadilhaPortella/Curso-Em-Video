<?php

require_once "Lobo.php";

class Cachorro extends Lobo{
//sobreposicao do método emitirSom()
    public function emitirSom(){
        echo "<p>Au au au !!</p>";
    }

//sobrecarga do método reagir(), porém em php não é possivel utilizar sobrecarga de método
/*  function reagir($frase){}
    function reagir($dono){}
    function reagir($horario){}
    function reagir($estimulo){}
*/

    function reagirFrase($frase){
        if($frase === "Cala boca"){
            echo "Rosnar e latir\n";
        }else{
            echo "Abanar Rabo\n";
        }
    }
    function reagirDono($dono){
        if($dono == "Pedro"){
            echo "Abanar Rabo para $dono\n";
        }else{
            echo "Latir e rosnar\n";
        }
    }
    function reagirHorario($horario){
        if($horario < 12){
            echo "dormir\n";
        }else{
            echo "latir e brincar\n";
        }
    }
}