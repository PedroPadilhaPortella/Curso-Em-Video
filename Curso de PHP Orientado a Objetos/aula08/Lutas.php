<?php
require_once "Lutador.php";

class Lutas{
    /* Variaveis da Classe */
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;


/*Métodos da Classe*/
    public function marcarLuta($lutador01, $lutador02){
        if($lutador01->getCategoria() === $lutador02->getCategoria() && $lutador01 != $lutador02 && $lutador01->getSexo() === $lutador02->getSexo()){
            $this->aprovada = true;
            $this->desafiado = $lutador01;
            $this->desafiante = $lutador02;
        }else{
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    public function lutar(){
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            
            $ProbVencedor01 = (($this->desafiado->getVitorias() + $this->desafiado->getDerrotas() + $this->desafiado->getEmpates()/ $this->desafiado->getVitorias()));
            $ProbVencedor02 = (($this->desafiante->getVitorias() + $this->desafiante->getDerrotas() + $this->desafiante->getEmpates()/ $this->desafiante->getVitorias()));
            
            if($ProbVencedor01 == $ProbVencedor02){ //EMPATE
                echo "<p><strong>EMPATE entre {$this->desafiado->getNome()} e {$this->desafiante->getNome()}</strong></p>";
                $this->desafiado->empatarLuta();
                $this->desafiante->empatarLuta();
            }else if($ProbVencedor01 > $ProbVencedor02){ //LUTADOR 1 VENCE
                    echo "<p><strong>VITÓRIA de {$this->desafiado->getNome()}</strong></p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
            }else{ //LUTADOR 2 VENCE
                echo "<p><strong>VITÓRIA de {$this->desafiante->getNome()}</strong></p>";
                $this->desafiado->perderLuta();
                $this->desafiante->ganharLuta();
            }
        }else{
            echo "<p>Luta não Foi Aprovada e Não pode acontecer!</p>";
        }
    }


/*Métodos Getters e Setters*/
    private function getDesafiado(){
        return $this->desafiado;
    }
    private function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }

    private function getDesafiante(){
        return $this->desafiante;
    }
    private function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }

    private function getRounds(){
        return $this->rounds;
    }
    private function setRounds($rounds){
        $this->rounds = $rounds;
    }

    private function getAprovada(){
        return $this->aprovada;
    }
    private function setAprovada($aprovada){
        $this->aprovada = $aprovada;
    }
}
?>