<?php
Class Conta{
    private $nome;
    private $numConta;
    private $saldo;

    function imprimirNome(){
        echo"<h1 style='color:red; text-align:left;'> Olá mundo </h1>";
    }
    function imprimirTexto($texto){
        echo"<h2 style='color:blue; text-align:left;'>Olá ".$texto."<h2>";
    }
    function calcular(){
        return (10+30);
    }
    function maquinaDeCalcular($num1, $num2, $op){
        switch($op){
            case 1:
                $res = $num1+$num2;
                break;
            case 2:
                $res = $num1-$num2;
                break;
            case 3:
                $res = $num1*$num2;
                break;
            default:
            if($num2!=0){
                $res = $num1/$num2;
            }else{
                $res=0;
                }
        }
        return $res;
    }
}
?> 