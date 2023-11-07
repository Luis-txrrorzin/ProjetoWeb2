<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apostas</title>

<style>
    .Container{
        background-color: blue;
        border: 1px solid black;
        align-items: center;
        padding: 20px;
        display: flex;
        flex-direction: column;
        margin: 10px auto;
        max-width: 300px;
    }
    form{
        display: flex;
        flex-wrap: wrap; 
        justify-content: center; 
        align-items: center;
        width: 100%;
    }
    form input{
        width: 48%;
        padding: 10px;
        margin: 8px;
    }
    .botao{
        width: 100%; 
        display: flex;
        justify-content: space-between; 
        margin-top: 10px;
    }
</style>    

</head>
<body>

    <div class="Container">
    <h1>Bet do JEFFINHO</h1>
         <form action="calculoAposta.php" method="post">     
            <input type="text" id="time1Nome" name="time1Nome" placeholder="Nome do time 1">
            <input type="number" id="time1Gols" name="time1Gols" 
            min="0" max="10" placeholder="Gols do time 1">
            <input type="text" id="time2Nome" name="time2Nome" placeholder="Nome do time 2">
            <input type="number" id="time2Gols" name="time2Gols" 
            min="0" max="10" placeholder="Gols do time 2">
            <div class="botao">
            <input type="submit" value="Ver Resultado">
            <input type="reset" value="Limpar">
            </div>
         </form>
    </div>

</body>
</html>
