<?php
$nome = $_POST['username'];
$sexo = $_POST['genero'];
$idade = $_POST['idade'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];

if ($sexo === 'Masculino' && $idade >= 20 && $altura >= 1.90 && $peso >= 70 && $peso <= 90) {
    echo $nome . ', você foi aprovado para a vaga masculina.';
} elseif ($sexo === 'Feminino' && $idade >= 16 && $idade <= 18 && $altura >= 1.60 && $altura <= 1.70 && $peso <= 60) {
    echo $nome . ', você foi aprovado para a vaga feminina.';
} else {
    echo $nome . ', você não foi aprovado desta vez.';
}
