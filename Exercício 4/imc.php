<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de IMC</title>
</head>
<body>
</body>
</html>

<?php
// Declaração das variáveis
    $peso = $_POST ['peso'];
    $alt = $_POST ['alt'];
    $imc = $peso / ($alt * $alt / 10000);
    
// Declaração do if
    if ($imc < 16){ 
        echo "Seu IMC é $imc, você está com  magreza grave"; 
    }

    else if ($imc = 16 or $imc < 16.9){
        echo "Seu IMC é $imc, você está com magreza moderada"; 
        }

    else if ($imc = 17 or $imc < 18.5){
        echo "Seu IMC é $imc, você está com magreza leve"; 
    }

    else if ($imc = 18.5 or $imc < 24.9){
        echo "Seu IMC é $imc, você está com um peso normal"; 
    }

    else if ($imc = 25 or $imc < 29.9){
        echo "Seu IMC é $imc, você está com sobrepeso"; 
    }

    else if ($imc = 30 or $imc < 34.9){
        echo "Seu IMC é $imc, você está com obesidade grau I"; 
    }

    else if ($imc = 35 or $imc < 39.9){
        echo "Seu IMC é $imc, você está com obesidade grau II"; 
    }

    else {
        echo "Seu IMC é $imc, você está com obesidade grau III ou mórbida"; 
    }
?>