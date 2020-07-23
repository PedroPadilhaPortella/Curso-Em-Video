<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }


    private function getVolume(){
        return $this->volume;
    }
    private function setVolume($volume){
        $this->volume = $volume;
    }

    private function getLigado(){
        return $this->ligado;
    }
    private function setLigado($ligado){
        $this->ligado = $ligado;
    }
    private function getTocando(){
        return $this->tocando;
    }
    private function setTocando($tocando){
        $this->tocando = $tocando;
    }


    public function ligar(){
        $this->setLigado(true);
        echo "LIGANDO...";
    }
    public function desligar(){
        $this->setLigado(false);
        echo "<br>DESLIGANDO...";
    }
    public function abrirMenu(){
        echo "<p>*--------MENU-------*<p>";
        echo "Está ligado?". ($this->getLigado()? "SIM": "NÃO");
        echo "<br>Está tocando?". ($this->getTocando()? "SIM": "NÃO");
        echo "<br>VOLUME:". $this->getVolume();
        for($i = 0; $i < $this->getVolume(); $i+= 10){
            echo "|";
        }
        echo "<br>";
        echo "<p>*--------MENU-------*<p>";
    }
    public function fecharMenu(){
        echo "<p>Fechando Menu...</p>";
    }
    public function maisVolume(){
        if($this->getLigado() == true){
            $this->setVolume($this->getVolume() + 5);
            echo "<br>Volume ATUAL: ". ($this->getVolume() + 5);
        }else{
            echo "<p>[VOLUME] Não pode diminuir o volume com a tv desligada</p>";
        }
    }
    public function menosVolume(){
        if($this->getLigado() == true){
            $this->setVolume($this->getVolume() - 5);
            echo "<br>Volume ATUAL: ". ($this->getVolume() - 5);
        }else{
            echo "<p>[VOLUME] Não pode diminuir o volume com a tv desligada</p>";
        }
    }
    public function ligarMudo(){
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
            echo "<br>MUDO LIGADO";
        }
    }
    public function desligarMudo(){
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
            echo "<br>MUDO DESLIGADO";
        }
    }
    public function play(){
        if($this->getLigado() && !($this->getTocando()) ){
                $this->setTocando(true);
                echo "<br>PLAY !";
        }
    }
    public function pause(){
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
            echo "<br>PAUSE !";
        }
    }
}