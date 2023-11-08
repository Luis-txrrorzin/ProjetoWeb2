<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora php</title>

<style>
    .container {
        float: left;
        width: 30%;
        border: 1px solid black; 
        padding: 10px; 
    }
    .form-coluna {
        display: flex;
        flex-direction: column;
    }
    label {
        margin-bottom: 5px; 
    } 
    input {
        margin-bottom: 10px; 
    }
    input[name="calc"] {
        background-color: blue; 
        color: white; 
        padding: 5px 10px; 
        border: none; 
        cursor: pointer; 
    }
</style>

</head>
<body>
    <?php
    include('./Calculadora.php');
    $obj = new Conta();
    $obj->imprimirNome();
    $obj->imprimirTexto("Luis Serwazi DEV");
    echo"<h1>Resultado:".$obj->calcular()."</h1>";

    ?>
    <div class="container">
    <form action="#" method="post" class="form-coluna">
        <label for="op">Opções <br> 1=+ <br> 2=- <br> 3=* <br> 4=/:</label>
        <input type="number" name="op" id="op" placeholder="Informe a opção">
        <label for="n1">Informe o 1º valor:</label>
        <input type="number" name="n1" id="n1" placeholder="Informe o valor">
        <label for="n2">Informe o 2º valor:</label>
        <input type="number" name="n2" id="n2" placeholder="Informe o valor">
        <input type="submit" name="calc" value="Calcular">
    </form>
    <?php
    if(isset($_POST['calc'])){
        $op = $_POST['op'];
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        echo"<div><h1>"
            .$obj->maquinaDeCalcular($n1, $n2, $op)
            ."</h1></div>";
    }
    ?>
    </div>
</body>
</html>