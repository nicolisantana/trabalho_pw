<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title> Sistema de heróis </title>
</head>
<body>

<br><br>
<center>
    <div class="div1">
        <br>
        <h1>Sistema dos Heróis</h1>

        <form action="./back.php" method="post">
            <h3>Selecione um Universo:</h3>
            
            <select name="verso">
                <option value="marvel"> Marvel </option>
                <option value="dc"> DC </option>
            </select>

            <br><br>

            <h3>Selecione um Herói:</h3>

            <select name="hero">
                <option value="loki">Loki</option>
                <option value="ha">Homem Aranha</option>
                <option value="thor">Thor</option>
                <option value="natt">Romanoff</option>
                <option value="fe">Feiticeira Escarlate</option>

                <option value="sm">Super Homem</option>
                <option value="sgirl">Super Girl</option>
                <option value="mm">Mulher Maravilha</option>
                <option value="bt">Batman</option>
                <option value="flash">Flash</option>
            </select>
            <br><br>

            <h3>Digite a quantidade de repetições:</h3>

            <input type="number" name="repeticao"><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</center>

</body>
</html>