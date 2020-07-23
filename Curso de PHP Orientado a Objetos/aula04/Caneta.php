<?php

class Caneta{
    private $modelo;
    private $ponta;
    private $tampada;
    private $cor;

    //O método construtor pode ser nomeado como __construct ou mesmo nome da classe
    //Ele define os parametros padrão da classe
    public function Caneta($m, $c, $p, $tampa){
        $this->setModelo($m);
        $this->setCor($c);
        $this->setPonta($p);
        $this->setTampa($tampa);
    }

    public function setTampa($tampa){
        $this->tampada = $tampa;
    }

    public function getTampa(){
        if($this->tampada == true){
            $this->tampada = false;
        }else{
            $this->tampada = true;
        }
        
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getPonta(){
        return $this->ponta;
    }

    public function setPonta($p){
        $this->ponta = $p;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setCor($c){
        $this->cor = $c;
    }
}

?>