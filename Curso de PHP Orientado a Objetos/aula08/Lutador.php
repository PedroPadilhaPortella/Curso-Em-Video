<?php

class Lutador{
    /* Variaveis da Classe */
    private $nome;
    private $nacionalidade;
    private $sexo, $idade, $peso, $altura;
    private $categoria, $vitorias, $derrotas, $empates;

/* Método Construtor */
    public function __construct($nome, $nacionalidade, $sexo, $idade, $peso, $altura, $vitorias, $derrotas, $empates){
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->sexo = $sexo;
        $this->idade = $idade;
        $this->setPeso($peso);
        $this->altura = $altura;
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

/* Métodos da Classe */
    public function apresentar(){
        echo "<p>------------------------------------------------------------</p>";
        echo "<p>Chegou a Hora!! Diretamente de {$this->getNacionalidade()}!!</p>";
        echo "<p>Com {$this->getIdade()} anos, pesando {$this->getPeso()}kg e com {$this->getAltura()} de altura.</p>";
        echo "<p>Atualmente com {$this->getVitorias()} Vitórias, {$this->getDerrotas()} Derrotas e {$this->getEmpates()} Empates.</p>";
        echo "<p>{$this->getNome()} !!!</p>";
    }
    public function status(){
        echo "<p>================== ". strtoupper($this->getNome()) ." ==================</p>";
        echo "Nacionalidade: {$this->getNacionalidade()}<br>";
        echo "Categoria: {$this->getCategoria()}</br>";
        echo "Vitórias: {$this->getVitorias()}<br>";
        echo "Derrotas: {$this->getDerrotas()}<br>";
        echo "Empates: {$this->getEmpates()}<br>";
    }
    public function ganharLuta(){
        $this->setVitorias ($this->getVitorias() + 1);
    }
    public function perderLuta(){
        $this->setDerrotas ($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates ($this->getEmpates() + 1);
    }




/* Métodos Getters e Setters da Classe */
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }

    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function getCategoria(){
        return $this->categoria;
    }
    public function setCategoria(){
        if($this->peso < 52.2){
            $this->categoria = 'Invalido';
        }elseif($this->peso <= 70.3){
            $this->categoria = 'Leve';
        }elseif($this->peso <= 83.9){
            $this->categoria = 'Medio';
        }elseif($this->peso <= 120.2){
            $this->categoria = 'Pesado';
        }else{
            $this->categoria = 'Invalido';
        }
    }

    public function getVitorias(){
        return $this->vitorias;
    }
    public function setVitorias($vitorias){
        $this->vitorias = $vitorias;
    }

    public function getDerrotas(){
        return $this->derrotas;
    }
    public function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
    }

    public function getEmpates(){
        return $this->empates;
    }
    public function setEmpates($empates){
        $this->empates = $empates;
    }
}
?>