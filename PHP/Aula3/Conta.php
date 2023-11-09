<?php
Class Conta{
    private $nome;
    private $numConta;
    private $cpf;
    private $saldo;

function __construct(){
    $this->nome = "Luis dev: ";
    $this->cpf = "05384595060";
    $this->numConta = 123-4;
    $this->saldo = 50;
}
    function setNome($nome){
        $this->nome = $nome;
    }
    function getNome(){
        return $this->nome;
    }
    function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    function getNumConta() {
        return $this->numConta;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function getSaldo() {
        return $this->saldo;
    }
    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function getCpf() {
        return $this->cpf;
    }
    function imprimirSaldo(){
        echo"<br>Saldo disponivel R$:".$this->getSaldo();
    }
    function imprimirDados(){
        echo"<br><h1 style='color:red; text-align:left;'>Cadastrado com sucesso</h1><br>";
        echo"<br>Senhor(a) ".$this->nome." do CPF: ".$this->cpf."<br>";
        echo"<br>tem a conta numero ".$this->numConta;
        echo"<br>fez o seu primeiro deposito de ".$this->saldo;
    }
    function debitar($valor){
        if($valor <= $this->saldo){
            $this->saldo-=$valor;
            echo"O valor R$".$valor." foi sacado com sucesso!";
        }else{
            echo"Saldo insuficiente!";
        }
    }
    function depositar($valor){
        if($valor){
            $this->saldo += $valor;
            echo "O valor R$".$valor
                ." foi depositado com sucesso!";

        }
    }
}
?> 
