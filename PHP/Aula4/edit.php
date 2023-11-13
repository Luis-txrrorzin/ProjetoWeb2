<?php
    include_once 'config/config.php';
    include_once './classes/Crud.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $Crud = new Crud($db);
        $user = $Crud->readEdit($id)->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            header('Location: index.php');
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $cpf = $_POST['cpf'];

            $Crud->update($id, $nome, $idade, $cpf);

            header('Location: index.php');
            exit();
        }
    } else {
        header('Location: index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
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
            background-color: #8B0000; /* Dark Red */
            color: #fff;
            padding: 15px;
            margin: 5px;
            border: 1px solid #8B0000; /* Dark Red */
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
            background-color: #8B0000; /* Dark Red */
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #580000; /* Darker Red on Hover */
        }

        a {
            text-decoration: none;
            color: #8B0000; /* Dark Red */
            margin-top: 10px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Editar Usuário</h1>
    <form method="POST" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $user['nome']; ?>" required><br>

        <label for="idade">Idade:</label>
        <input type="text" name="idade" value="<?php echo $user['idade']; ?>" required><br>

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" value="<?php echo $user['cpf']; ?>" required><br>

        <input type="submit" value="Salvar">
    </form>
    <a href="index.php">Voltar para a tela inicial</a>
</body>
</html>
