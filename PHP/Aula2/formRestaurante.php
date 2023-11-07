<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de formulário</title>

<style>
    .Container{
        border: 1px solid black;
        align-items: center;
        width: 400px;
        padding: 20px;
        display: flex;
        flex-direction: column;
        margin: 10px auto;
    }
    form{
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center
    }
    form input{
        width: 300px;
        padding: 10px;
        margin-top: 10px;
    }
</style>    


</head>
<body>

    <div class="Container">
    <h1>RESTAURANTE DO FOFÂO</h1>
    <form action="calculoRestaurante.php" method="post">
        <input type="texte" name="nomePrato" id="nomePrato"
            placeholder="Insira o nome do prato">
        <input type="number" name="peso" id="peso"
            min="10" max="20000" step="0.01 "placeholder="Peso do prato">
        <input type="submit" value="Calcular">
        <input type="reset" value="Limpar">
    </form>
    </div>

</body>
</html>