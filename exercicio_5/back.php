<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Bháskara</title>
</head>
<body>
    <br><br><br><br>
<center>
    <div class="div1">
        <br><br><br><br><br><br>
        <h1>Bháskara:</h1>

        <?php
            $varA = $_POST["a"];
            $varB = $_POST["b"];
            $varC = $_POST["c"];

            $varDelta = ($varB ** 2) - 4 * $varA * $varC;
            $varX1 = (-$varB + sqrt($varDelta)) / (2 * $varA);
            $varX2 = (-$varB - sqrt($varDelta)) / (2 * $varA);

            if($varA == 0){
                echo "<h2> O valor de A não pode ser igual a 0 </h2>";
            }
            else if($varDelta < 0){
                echo "<h2> A equação não possui raizes </h2>";
            }
            else{
                echo "S = {" . $varX1 . " , " . $varX2 . "}";
            }
        ?>
    </div>
</center>   
</body>
</html>