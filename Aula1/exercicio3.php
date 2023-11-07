<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabelinha</title>
</head>
<body>
    <h1>RIFA DO TIO BE</h1>
    <table style= "border-radius: 20px; border:2; ">
        <?php
        for($i=1;$i<=999;$i++){
        echo "
        <tr>
            <td style='color:red;text-align:center;><h3 style='color:red;text-align:center;>N° $i</h3>
                <h3>Nome: </h3>
                <h3>Valor: R$ 2,00</h3>
            </td>
            <td><h1>Ação entre amigos</h1>
            <h2>Prêmio: Som JBL</h2>
            <h2>Data: 10/10/2024</h2>
            <h2>Valor: R$ 2,00</h2>
            <h2>N° $i</h2>
            </td>
        </tr>";
        }//fim do loop
        ?>

    </table>
</body>
</html>