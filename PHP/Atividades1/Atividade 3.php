<?php
// Função para determinar a categoria com base na idade
function classificarNadador($idade) {
    if ($idade >= 5 && $idade <= 7) {
        return "Infantil A";
    } elseif ($idade >= 8 && $idade <= 10) {
        return "Infantil B";
    } elseif ($idade >= 11 && $idade <= 13) {
        return "Juvenil A";
    } elseif ($idade >= 14 && $idade <= 17) {
        return "Juvenil B";
    } else {
        return "Adulto";
    }
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = $_POST["idade"];

    // Verificar se a idade é um número válido
    if (is_numeric($idade) && $idade >= 0) {
        $categoria = classificarNadador($idade);
        $mensagem = "O nadador está na categoria: $categoria";
    } else {
        $mensagem = "Por favor, insira uma idade válida.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Classificação de Nadador</title>
</head>
<body>
    <h1>Classificação de Nadador</h1>
    <form method="post">
        <label for="idade">Idade do Nadador: </label>
        <input type="number" id="idade" name="idade" required>
        <input type="submit" value="Classificar">
    </form>

    <?php if (isset($mensagem)) { ?>
        <p><?php echo $mensagem; ?></p>
    <?php } ?>
</body>
</html>
