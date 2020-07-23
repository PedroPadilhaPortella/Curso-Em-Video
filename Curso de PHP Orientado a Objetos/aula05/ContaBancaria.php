<?php

class ContaBancaria{
    public $numeroConta;
    protected $tipoConta;
    private $cliente;
    private $saldo;
    private $status;

/*
O método construtor pode ser nomeado como __construct ou mesmo nome da classe
Ele define os parametros padrão da classe
*/
    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta Criada com Sucesso</p>";
    }

    public function abrirConta($tipo){
        $this->setStatus(true);
        $this->setTipoConta($tipo);
        if($tipo == "cc"){
            $this->setSaldo(50);
        }elseif($tipo == "cp"){
            $this->setSaldo(150);
        }
    }

    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo "<p>[AVISO] {$this->getCliente()} não pode fechar a conta porque ela ainda tem saldo</p>";
        }elseif($this->getsaldo() < 0){
            echo "<p>[AVISO] {$this->getCliente()} não pode fechar a conta porque ela está em débito</p>";
        }else{
            $this->setStatus(false);
            echo "<p>[CONTA] Fechamento de conta de {$this->getCliente()} efetivada</p>";
        }
    }

    public function depositar($valor){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $valor);
            //$this->setSaldo($this->saldo + $valor);
            echo "<p>[DEPOSITO] Deposito de R$$valor na conta de {$this->getCliente()}</p>";
        }else{
            echo "<p>[AVISO] Esta conta [{$this->getCliente()}] está Fechada ou Desativada, não é possivel Depositar</p>";
        }
    }

    public function sacar($valor){
        if($this->getStatus()){
            if($this->getSaldo() >= $valor){
                $this->setSaldo($this->getSaldo() - $valor);
                //$this->setSaldo($this->getSaldo() - $valor);
                echo "<p>[SAQUE AUTORIZADO] Saque de R$$valor na conta de {$this->getCliente()} </p>";
            }else{
                echo "<p>[AVISO] Saldo Insuficiente para Saque de R$$valor na conta de {$this->getCliente()}</p>";
            }
        }else{
            echo "<p>[AVISO] Esta conta está Fechada ou Desativada, não é possivel Sacar</p>";
        }
    }

    public function pagarAnuidade(){
        if($this->getTipoConta() == "cc"){
            $valor = 12;
        }elseif($this->getTipoConta() == "cp"){
            $valor = 20;
        }
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $valor);
            echo "<p>[ANUIDADE] Débito de  R$$valor na conta de {$this->getCliente()}</p>";
        }else{
            echo "<p>[AVISO] Problemas na Conta, Imposivel Pagar Anuidade na conta de {$this->getCliente()}</p>";
        }
    }

/* Métodos Getters e Setters */

    public function setNumeroConta($numero){
        $this->numeroConta = $numero;
    }
    public function getNumeroConta(){
        return $this->numeroConta;
    }
    public function setTipoConta($tipo){
        $this->tipoConta = $tipo;
    }
    public function getTipoConta(){
        return $this->tipoConta;
    }
    public function setCliente($cliente){
        $this->cliente = $cliente;
    }
    public function getCliente(){
        return $this->cliente;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setStatus($state){
        $this->status = $state;
    }
    public function getStatus(){
        return $this->status;
    }
}
?>