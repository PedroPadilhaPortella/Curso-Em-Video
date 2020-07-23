<?php
require_once "Aluno.php";
require_once "Video.php";


class Visualizacao {
    private $espectador;
    private $filme;

    public function __construct($espectador, $filme){
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setAulasAssistidas($this->espectador->getAulasAssistidas() + 1);
    }


    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);
    }
    public function avaliarPorcentagem($porcentagem){
        $nota = 0;
        if($porcentagem <= 20){
            $nota = 3;
        }else  if($porcentagem <= 50){
            $nota = 5;
        }else if($porcentagem <= 70){
            $nota = 7;
        }else{
            $nota = 10;
        }
    }


//getters e setters
    public function getEspectador(){
        return $this->espectador;
    }
    public function setEspectador($espectador){
        $this->espectador = $espectador;
    }

    public function getFilme(){
        return $this->filme;
    }
    public function setFilme($filme){
        $this->filme = $filme;
    }
}