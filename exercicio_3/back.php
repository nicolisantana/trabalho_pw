<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sisitema Notas</title>
</head>
<body>

<h2>IMC:</h2>

<?php

    $varPeso = $_POST["peso"];
    $varAltura = $_POST["altura"];

    $varIMC = $varPeso / ($varAltura ** 2);

    echo "<h1> $varIMC </h1>";

    

?>
    
</body>
</html>