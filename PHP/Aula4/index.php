<?php
    include_once 'config/config.php';
    include_once './classes/Crud.php';
    $Crud = new Crud($db);
    $data = $Crud->read();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <style>
        body {
            background-color: #f0f0f0; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            margin: 10px;
        }

        table {
            border-collapse: collapse;
            width: 60%;
            margin: 10px; 
            background-color: #fff; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4CAF50; 
            color: white;
        }

        a {
            display: inline-block;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            background-color: #007BFF; 
            color: white;
            border-radius: 4px;
            transition: background-color 0.3s;
            margin: 10px;
        }

        a:hover {
            background-color: #0056b3; 
        }
    </style>
</head>
<body>
    <h1>TELA INICIAL</h1>
    <a href="add.php">Adicionar Usuário</a>
    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>cpf</th>
            <th>Ações</th>
        </tr>
        <?php
            while ($row = $data->fetch(PDO::FETCH_ASSOC))
        {?>
        <tr>
            <td><?php echo $row['nome'];?></td>
            <td><?php echo $row['idade'];?></td>
            <td><?php echo $row['cpf'];?></td>
            <td><a href="edit.php?id=<?php echo $row['id'];?>">Editar</a>
            <a href="delete.php?id=<?php echo $row['id'];?>">Excluir</a></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>