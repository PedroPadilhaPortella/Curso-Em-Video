<?php
require_once "Aluno.php";

final class Bolsista extends Aluno{
    private $bolsa;

    public function bolsa(){
        echo "<p>Bolsa Renovada</p>";
    }

    public final function pagarMensalidade(){
        echo "<p>Mensalidade do Aluno Bolsista {$this->getNome()} paga com desconto!</p>";
    }

    public function getBolsa(){
        return $this->bolsa;
    }
    public function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }
}