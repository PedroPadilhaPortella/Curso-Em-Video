<?php

class Treino
{
    var $energia;
    var $repeticao;
    var $treino;

    function Treinar(){
        echo "<br>treino de $this->treino iniciado";
        while($this->energia > 0){
                $this->repeticao += 1;
                $this->energia -= 1;
                echo "<br>$this->repeticao repetição";
        }
        echo "<br>treino de $this->treino terminado";
    }
}


?>