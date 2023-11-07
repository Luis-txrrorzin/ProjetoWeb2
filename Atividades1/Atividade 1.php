<?php
// Definindo o preço por quilo
$precoPorQuilo = 21.50;

// Peso do prato montado pelo usuário (em gramas)
$pesoDoPrato = 0;

if (isset($_POST['pesoDoPrato'])) {
    $pesoDoPrato = floatval($_POST['pesoDoPrato']);
}

// Convertendo o peso do prato para quilos
$pesoEmQuilos = ($pesoDoPrato + 200) / 1000;

// Calculando o valor a ser pago
$valorAPagar = $precoPorQuilo * $pesoEmQuilos;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Preço do Restaurante</title>
</head>
<body>
    <h1>Calculadora de Preço do Restaurante</h1>
    <form method="post">
        <label for="pesoDoPrato">Peso do prato (em gramas): </label>
        <input type="text" id="pesoDoPrato" name="pesoDoPrato" value="<?php echo $pesoDoPrato; ?>" required>
        <input type="submit" value="Calcular">
    </form>

    <p>Valor a pagar: R$ <?php echo number_format($valorAPagar, 2, ',', '.'); ?></p>
</body>
</html>
