<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de IMC</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>

<?php
// Declaração das variáveis
    $peso = $_POST ['peso'];
    $alt = $_POST ['alt'];
    $imc = $peso / ($alt * $alt / 10000);
    
// Declaração do if
    if ($imc < 16){ 
        echo "<p style='color: aliceblue; font-family: Comic Sans MS; font-size: 20px;'>Seu IMC é $imc, você está com  magreza grave</p>";
    }

    else if ($imc < 16.9){
        echo "<p style='color: aliceblue; font-family: Comic Sans MS; font-size: 20px;'>Seu IMC é $imc, você está com magreza moderada</p>";        }

    else if ($imc < 18.5){
        echo "<p style='color: aliceblue; font-family: Comic Sans MS; font-size: 20px;'>Seu IMC é $imc, você está com magreza leve</p>"; 
    }

    else if ($imc < 24.9){
        echo "<p style='color: aliceblue; font-family: Comic Sans MS; font-size: 20px;'>Seu IMC é $imc, você está com um peso normal</p>";
    }

    else if ($imc < 29.9){
        echo "<p style='color: aliceblue; font-family: Comic Sans MS; font-size: 20px;'>Seu IMC é $imc, você está com sobrepeso</p>";    }

    else if ($imc < 34.9){
        echo "<p style='color: aliceblue; font-family: Comic Sans MS; font-size: 20px;'>Seu IMC é $imc, você está com obesidade grau I</p>";
    }

    else if ($imc < 39.9){
        echo "<p style='color: aliceblue; font-family: Comic Sans MS; font-size: 20px;'>Seu IMC é $imc, você está com obesidade grau II</p>";
    }

    else {
        echo "<p style='color: aliceblue; font-family: Comic Sans MS; font-size: 20px;'>Seu IMC é $imc, você está com obesidade grau III ou mórbida</p>";
    }
?>

</body>
</html>

