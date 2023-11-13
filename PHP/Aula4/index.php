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
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            margin: 0px 0px 10px 0px;
            width: 100%;
        }

        a {
            text-decoration: none;
            padding: 10px;
            margin-bottom: 10px;
            color: #fff;
            text-align: center;
            background-color: #8B0000; 
            display: block;
        }

        a:hover {
            background-color: #580000; 
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .action-buttons {
            display: flex;
            justify-content: space-around;
        }

        .edit-button, .delete-button {
            padding: 5px 10px;
            color: #fff;
            text-decoration: none;
        }

        .edit-button {
            background-color: #8B0000; 
        }

        .edit-button:hover {
            background-color: #580000; 
        }

        .delete-button {
            background-color: #333; 
        }

        .delete-button:hover {
            background-color: #000; 
        }
    </style>
</head>
<body>
    <h1>TELA INICIAL</h1>
    <div class="adicionar">
    <a href="add.php">Adicionar Usuário</a>
    </div>
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