<?php

class Caneta{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampado;

    function Rabiscar(){
        if($this->tampado == true){
            echo "<p>Precisa destampar para rabiscar</p>";
        }else{
            echo "<p>estou rabiscando</p>";
        }
    }

    function Tampar(){
            $this->tampado = true;
    }

    function Destampar(){
        $this->tampado = false; 
    }
}

?>