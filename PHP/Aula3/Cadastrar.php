<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Banco Xiru</title>

    <style>
        .container {
            background-color: #f2f2f2;
            border: 2px solid #333; 
            padding: 20px; 
            width: 50%; 
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
        <h2>Cadastro de nova conta</h2>
        <p>Crie sua conta é rapido e facil</p>
        <p>Vem pra XiruBank</p>
        <form method="post">
            <input type="text" name="nome" placeholder="Informe o seu nome">
            <input type="number" name="cpf" placeholder="Informe o seu cpf">
            <input type="text" name="numconta" placeholder="Informe o numero da conta">
            <input type="number" name="saldo"  min="50" placeholder="Deposito minimo de R$50,00">
            <input type="submit" name="add" value="Salvar">
            <input type="reset" value="Limpar">
        </form>
    </div>
    <?php
    include("./config.php");

          
    if(isset($_SESSION['minha_conta'])){
     
        $obj = $_SESSION['minha_conta']; 
    } 

    if(isset($_POST['add'])){
        if(!empty($nome = $_POST['nome'])
            && !empty($cpf = $_POST['cpf'])
            && !empty($cpf = $_POST['numconta'])
            && !empty($cpf = $_POST['saldo'])){ 
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $numConta = $_POST['numconta'];
        $saldo = $_POST['saldo'];
        $obj->setNome($nome);
        $obj->setCpf($cpf);
        $obj->setNumConta($numConta);
        $obj->setSaldo($saldo);
        $obj->imprimirDados();
            header("refresh:8,formContaBanco.php");
    }else{
        echo"Não deixe os campos em branco(br)";
        header("refresh:3,formContaBanco.php");
    }
    }
    ?>
</body>
</html>
