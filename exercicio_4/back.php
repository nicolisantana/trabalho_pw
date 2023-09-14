<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Área do Triângulo</title>
</head>
<body>
 <br><br><br>
    <center>
        <div class="div1">
            <br><br><br><br><br><br>
        <h1>A área do triângulo é:</h1>

        <?php

            $varBase = $_POST["base"];
            $varAltura = $_POST["altura"];

            $varArea = ($varBase * $varAltura) / 2;

            echo "<h2> $varArea </h2>";

        ?>
        </div>
        
    </center>  
</body>
</html>