<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Sisitema Notas</title>
</head>
<body>
    <br><br><br>
    <center>
        <div class="div1">
            <br><br>
            <h2>IMC:</h2>

            <?php

                $varPeso = $_POST["peso"];
                $varAltura = $_POST["altura"];
                $varIMC = $varPeso / ($varAltura ** 2);

                echo "<h2> $varIMC </h2>";

                if($varIMC <= 17){
                    echo "<h2> Abaixo do peso </h2>";
                }else if($varIMC <= 23.7){
                    echo "<h2> Peso Normal </h2>";
                }else if($varIMC <= 27.8){
                    echo "<h2> Acima do peso </h2>";
                }else {
                    echo "<h2> Obecidade </h2>";
                }

            ?>
        </div>
    </center>
</body>
</html>