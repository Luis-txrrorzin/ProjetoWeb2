<?php
// Inicialize as variáveis para armazenar os nomes dos times e os gols marcados
$time1Nome = "";
$time2Nome = "";
$time1Gols = 0;
$time2Gols = 0;

if (isset($_POST['time1Nome']) && isset($_POST['time2Nome']) && isset($_POST['time1Gols']) && isset($_POST['time2Gols'])) {
    $time1Nome = $_POST['time1Nome'];
    $time2Nome = $_POST['time2Nome'];
    $time1Gols = intval($_POST['time1Gols']);
    $time2Gols = intval($_POST['time2Gols']);
}

$resultado = "";
if ($time1Gols > $time2Gols) {
    $resultado = "$time1Nome VENCEU a partida - $time1Gols X $time2Gols ($time2Nome)";
} elseif ($time2Gols > $time1Gols) {
    $resultado = "$time2Nome VENCEU a partida - $time2Gols X $time1Gols ($time1Nome)";
} else {
    $resultado = "A partida terminou em empate - $time1Gols X $time2Gols";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Partida</title>
</head>
<body>
    <h1>Resultado da Partida</h1>
    <form method="post">
        <label for="time1Nome">Nome do Time 1: </label>
        <input type="text" id="time1Nome" name="time1Nome" value="<?php echo $time1Nome; ?>" required>
        <br>
        <label for="time2Nome">Nome do Time 2: </label>
        <input type="text" id="time2Nome" name="time2Nome" value="<?php echo $time2Nome; ?>" required>
        <br>
        <label for="time1Gols">Gols do Time 1: </label>
        <input type="number" id="time1Gols" name="time1Gols" value="<?php echo $time1Gols; ?>" required>
        <br>
        <label for="time2Gols">Gols do Time 2: </label>
        <input type="number" id="time2Gols" name="time2Gols" value="<?php echo $time2Gols; ?>" required>
        <br>
        <input type="submit" value="Ver Resultado">
    </form>

    <p><?php echo $resultado; ?></p>
</body>
</html>
