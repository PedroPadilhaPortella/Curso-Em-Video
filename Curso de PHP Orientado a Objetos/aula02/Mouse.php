<?php

class Mouse
{
    var $conexao;
    var $ligado;
    var $corLed;
    
    function Conectar(){
        if($this->conexao == "USB"){
            $this->ligado = true;
            echo "<br>mouse conectado";
        }else{
            $this->ligado = false;
            echo "<br>conexao USB não encontrada";
        }
    }
    function Usar(){
        if($this->ligado){
            echo "<br>mouse em uso";
        }else{
            echo "<br>conecte o mouse primeiro";
        }
    }
}
?>