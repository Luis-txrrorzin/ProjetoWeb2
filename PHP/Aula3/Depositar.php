<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposito Banco Xiru</title>

    <style>
        .container {
            background-color: #f2f2f2;
            border: 2px solid #333; 
            padding: 20px; 
            width: 30%; 
            margin: 0 auto; 
            text-align: center; 
        }

        h2 {
            margin: 0 0 10px; 
        }

        form {
            display: flex; 
            flex-direction: column; 
            align-items: center; 
        }

        input[type="text"] {
            width: 50%; 
            margin: 5px 0; 
            padding: 5px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
        }

        input[type="number"] {
            width: 50%; 
            margin: 5px 0; 
            padding: 5px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
        }

        input[type="submit"], input[type="reset"] {
            background-color: #990000;
            color: white; 
            padding: 10px 20px; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            margin: 10px 0; 
            width: 50%;
        }
    </style>

</head>
<body>
    <div class="container">
        <h2>Deposite na sua conta</h2>
        <p>XiruBank o melhor</p>
        <form method="post" action="depositar.php">
            <input type="number" name="saldo" placeholder="Digite o valor que quer depositar">
            <input type="submit" name="add" value="Depositar">
        </form>
    </div>
    <?php
    include "Conta.php";
    session_start();
    
    if (isset($_SESSION['minha_conta'])) {
        $obj = $_SESSION['minha_conta'];
        echo $obj->getNome(); 
    }

    if (isset($_POST['add'])) {
        if (isset($_POST['saldo'])) {
            $valor = $_POST['saldo'];
            $obj->depositar($valor);
            $obj->imprimirSaldo();
            header("refresh:6,formContaBanco.php");
        }
    }
    ?>
</body>
</html>
