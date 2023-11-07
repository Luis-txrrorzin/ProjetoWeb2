<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <h1>AULA DE PHP</h1>
    <div class="container">
    <p>Testaremos neste bloco o uso do SWITCH CASE</p>
    <?php
    $op = 1;
    switch($op){
        case 1: echo " Sextou né Sor! "; break;
        case 2: echo " Aula de PHP né Sor! "; break;
        default:
        echo " Nem 1 Nem 2";
    }
    ?>
    </div>
</body>
</html>