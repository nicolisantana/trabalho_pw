<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

<center>
<h1>Resultado da Escolha:</h1>
<?php
    $varVerso = $_POST["verso"];
    $varHero = $_POST["hero"];
    $varRepeticao = $_POST["repeticao"];

    if($varVerso == "marvel"){

        if($varHero == "loki"){
            for($x=1; $x<=$varRepeticao; $x++){
                echo "<img src='./img/marvel2.jpg' width='450px'><br><br>";
            }
        }else if($varHero == "ha"){
            for($x=1; $x<=$varRepeticao; $x++){
                echo "<img src='./img/marvel7.jpg' width='450px'><br><br>";
            }
        }else if($varHero == "thor"){
            for($x=1; $x<=$varRepeticao; $x++){
                echo "<img src='./img/marvel1.jpg' width='450px'><br><br>";
            }
        }else if($varHero == "natt"){
            for($x=1; $x<=$varRepeticao; $x++){
                echo "<img src='./img/marvel4.jpg' width='450px'><br><br>";
            }
        }else if($varHero == "fe"){
            for($x=1; $x<=$varRepeticao; $x++){
                echo "<img src='./img/marvel5.jpg' width='450px'><br><br>";
            }
        }else{
            echo "Universo e Herói não correspondentes";
        }

    } else if($varVerso == "dc"){

        if($varHero == "sm"){
            for($x=1; $x<=$varRepeticao; $x++){
                echo "<img src='./img/dc6.jpg' width='350px'
                
                <br>";
            }
        }else if($varHero == "sgirl"){
            for($x=1; $x<=$varRepeticao; $x++){
                echo "<img src='./img/dc5.jpg' width='350px' id='img'><br>";
            }
        }else if($varHero == "mm"){
            for($x=1; $x<=$varRepeticao; $x++){
                echo "<img src='./img/dc8.jpg' width='350px' id='img'><br>";
            }
        }else if($varHero == "bt"){
            for($x=1; $x<=$varRepeticao; $x++){
                echo "<img src='./img/dc1.jpg' width='350px' id='img'><br>";
            }
        }else if($varHero == "flash"){
            for($x=1; $x<=$varRepeticao; $x++){
                echo "<img src='./img/dc4.jpg' width='350px' id='img'><br>";
            }
        }else{
            echo "Universo e Herói não correspondentes";
        }

    }
?>
</center>
</body>
</html>