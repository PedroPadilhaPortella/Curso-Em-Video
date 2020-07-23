<?php
require_once "Pessoa.php";
require_once "Publicacao.php";

class Livro implements Publicacao {
//atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $paginaAtual;
    private $aberto;
    private $leitor;

//construtor
    public function  __construct ($titulo, $autor, $totPaginas, $leitor){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->paginaAtual = 0;
        $this->leitor = $leitor;
    }

//métodos da Classe
    public function detalhes(){
        echo "<h4>{$this->getTitulo()}</h4>";
        echo "<p>Autor: {$this->getAutor()}</p>";
        echo "<p>Total de Páginas: {$this->getTotPaginas()}, Página Atual: {$this->getPaginaAtual()}</p>";
        echo "<p>Leitor Atual: {$this->leitor->getNome()}</p>";
    }

//Getters e Setters
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function getTotPaginas(){
        return $this->totPaginas;
    }
    public function setTotPaginas($totPaginas){
        $this->totPaginas = $totPaginas;
    }

    public function getPaginaAtual(){
        return $this->paginaAtual;
    }
    public function setPaginaAtual($paginaAtual){
        $this->paginaAtual = $paginaAtual;
    }

    public function getAberto(){
        return $this->aberto;
    }
    public function setAberto($aberto){
        $this->aberto = $aberto;
    }

    public function getLeitor(){
        return $this->leitor;
    }
    public function setLeitor($leitor){
        $this->leitor = $leitor;
    }

//Métodos Implementador da Interface Publicação

    public function abrir(){
        $this->aberto = true;
    }

    public function fechar(){
        $this->aberto = false;
    }

    public function folhear($pg){
        if($this->getAberto() && $pg + $this->getPaginaAtual() <= $this->getTotPaginas() && $pg + $this->getPaginaAtual() >= 0){
            $this->setPaginaAtual($this->getPaginaAtual() + $pg);
        }
    }

    public function avancarPagina (){
        if($this->getAberto() && $this->getPaginaAtual() < $this->getTotPaginas()){
            $this->setPaginaAtual($this->getPaginaAtual() + 1);
        }
    }

    public function voltarPagina (){
        if($this->getAberto() && $this->getPaginaAtual() > 0){
            $this->setPaginaAtual($this->getPaginaAtual() - 1);
        }
    }
}
?>