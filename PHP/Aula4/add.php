<?php
    include_once 'config/config.php';
    include_once './classes/Crud.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $cpf = $_POST['cpf'];

        $Crud = new Crud($db);
        $Crud->creat($nome, $idade, $cpf);

        header('Location: index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Usuario</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            text-align: center;
            background-color: #8B0000; 
            color: #fff;
            padding: 15px;
            margin: 5px;
            border: 1px solid #8B0000; 
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        label {
            margin-top: 10px;
            color: #333;
        }

        input {
            padding: 10px;
            margin-top: 5px;
        }

        input[type="submit"] {
            background-color: #8B0000; 
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #580000; 
        }

        a {
            text-decoration: none;
            color: #8B0000; 
            margin-top: 10px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Adicionar Usuário</h1>
    <form method="POST" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="idade">Idade:</label>
        <input type="text" name="idade" required><br>

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" required><br>

        <input type="submit" value="Adicionar">
    </form>
    <a href="index.php">Voltar para a tela inicial</a>
</body>
</html>
