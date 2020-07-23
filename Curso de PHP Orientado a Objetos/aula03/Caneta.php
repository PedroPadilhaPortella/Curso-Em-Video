<?php

class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampado;

    public function Rabiscar(){
        if($this->tampado == true){
            echo "<p>Precisa destampar para rabiscar</p>";
        }else{
            echo "<p>estou rabiscando</p>";
        }
        
    }

    public function Tampar(){
            $this->tampado = true;
    }

    public function Destampar(){
        $this->tampado = false; 
    }
}

?>