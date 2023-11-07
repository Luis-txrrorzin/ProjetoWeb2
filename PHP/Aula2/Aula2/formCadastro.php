<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: blue;
            padding: 20px;
            border: 1px solid black;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 300px;
        }

        .container h3 {
            color: white;
        }

        .Logar form {
            display: flex;
            flex-direction: column; /* Campos em coluna */
            align-items: center;
            width: 100%;
        }

        .Logar form input 
        {
            width: 100%;
            padding: 10px;
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .botao {
            text-align: center;
            margin-top: 10px;
        }

        .botao input {
            width: 100%;
            padding: 10px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="Titulo">
            <h3>Crie uma conta</h3>
            <p>É rápido e fácil</p>
        </div>
        <div class="Logar">
            <form action="cadastro.php" method="post">
                <input type="text" id="username" name="username" placeholder="Digite seu nome">
                <input type="text" id="email" name="email" placeholder="Digite seu email">
                <label>Sexo</label>
                <select name="genero" id="genero">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select>
                <input type="number" id="idade" name="idade" placeholder="Digite sua idade">
                <input type="number" id="altura" name="altura" 
                min="1.30" max="2.20" step="0.01" placeholder="Digite sua altura">
                <input type="number" id="peso" name="peso" 
                min="30" max="150" step="0.01" placeholder="Digite seu peso">
                <div class="botao">
                    <input type="submit" value="Cadastrar">
                    <input type="reset" value="Limpar">
                </div>
            </form>
        </div>
    </div>
</body>

</html>