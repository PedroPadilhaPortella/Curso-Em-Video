<?php
require_once "Pessoa.php";

class Aluno extends Pessoa{
    private $login;
    private $aulasAssistidas;

//construct
    public function __construct($nome, $idade, $sexo, $login){
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->aulasAssistidas = 0;
    }

    public function assistirMaisUm(){
        $this->aulasAssistidas ++;
    } 

//getters e setters
    public function getLogin(){
        return $this->login;
    }
    public function setLogin($login){
        $this->login = $login;
    }

    public function getAulasAssistidas(){
        return $this->aulasAssistidas;
    }
    public function setAulasAssistidas($aulasAssistidas){
        $this->aulasAssistidas = $aulasAssistidas;
    }

}
