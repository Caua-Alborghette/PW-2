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
?>