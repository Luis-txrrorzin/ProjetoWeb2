<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco do xiru</title>

    <style>
        h1 {
            text-align: center; 
        }

        .opcao {
            background-color: #f2f2f2; 
            border: 1px solid #d1d1d1;
            padding: 20px; 
            text-align: center; 
            display: flex; 
            flex-direction: column;
            align-items: center; 
        }

        .opcao a {
            width: 20%;
            text-decoration: none; 
            color: #333; 
            padding: 10px; 
            margin: 10px 0;
            border: 1px solid #ccc; 
            border-radius: 5px; 
        }
    </style>

</head>

<body>
    <h1>Banco do xiru</h1>
    <div class="opcao">
        <a href="./Cadastrar.php">Cadastrar</a>
        <a href="./Depositar.php">Depositar</a>
        <a href="./Sacar.php">Sacar</a>
        <a href="./Saldo.php">Imprimir saldo</a>
    </div>
</body>

</html>