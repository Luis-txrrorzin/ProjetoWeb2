<?php
if(isset($_POST['time1Nome'], $_POST['time2Nome'], $_POST['time1Gols'], $_POST['time2Gols'])){
    $time1Nome = $_POST['time1Nome'];
    $time2Nome = $_POST['time2Nome'];
    $time1Gols = $_POST['time1Gols'];
    $time2Gols = $_POST['time2Gols'];

    if (!empty($time1Nome) && !empty($time2Nome) && is_numeric($time1Gols) && is_numeric($time2Gols)) {
        if ($time1Gols > $time2Gols) {
            echo "$time1Nome VENCEU a partida - $time1Gols X $time2Gols no ($time2Nome)";
            header("refresh:5,formAposta.php");
        } elseif ($time2Gols > $time1Gols) {
            echo "$time2Nome VENCEU a partida - $time2Gols X $time1Gols no ($time1Nome)";
            header("refresh:5,formAposta.php");
        } else {
            echo "A partida terminou em empate - $time1Gols X $time2Gols";
            header("refresh:5,formAposta.php");
        }
    } else {
        echo "Dados insuficientes ou inválidos. Certifique-se de preencher todos os campos corretamente.";
        header("refresh:3,formAposta.php");
    }
} else {
    echo "Os campos não foram submetidos. Por favor, preencha o formulário.";
    header("refresh:2,formAposta.php");
}
?>
