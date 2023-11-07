<?php
$nome = $_POST['nomePrato'];
$peso = $_POST['peso'];

if(!empty($_POST['nomePrato']) && isset($_POST['nomePrato'])
    && !empty($_POST['peso']) && isset($_POST['peso'])){

$valor = ($peso/1000)*21.50;
echo"Prato: $nome Peso:".$peso." Gramas - Valor a pagar R$:$valor";
}else{
    echo"Dados insuficientes!";
    header("refresh:3,formRestaurante.php");
}