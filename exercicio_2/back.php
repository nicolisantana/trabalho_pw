<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Sisitema de Notas</title>
</head>
<body>
    <center>
        <div class="div1">
            <h1>Menção:</h1>

            <?php

                $varNota = $_POST["nota"];

                if($varNota <= 4){
                    echo "<h2 class='m_i'> I </h2>";
                } else if($varNota <= 6){
                    echo "<h2 class='m_r'> R </h2>";
                } else if($varNota <= 8){
                    echo "<h2 class='m_b'> B </h2>";
                } else{
                    echo "<h2 class='m_mbh'> MB </h2>";
                }
            ?>
    </center>
</div>
</body>
</html>
