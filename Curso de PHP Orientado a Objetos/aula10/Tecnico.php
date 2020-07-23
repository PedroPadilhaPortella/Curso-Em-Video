<?php

require_once "Aluno.php";

final class Tecnico extends Aluno{
    private $registroProfissional;

    public function praticar(){
        echo "<p>Técnico {$this->getNome()} treinando suas habilidades.</p>";
    }

    public function getRegistroProfissional(){
        return $this->salario;
    }
    public function setRegistroProfissional($registroProfissional){
        $this->registroProfissional = $registroProfissional;
    }
}