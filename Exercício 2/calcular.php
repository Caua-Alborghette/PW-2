<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
    
</body>
</html>

<?php
// Declaração das variáveis
    $num1 = $_POST ['num1'];
    $num2 = $_POST ['num2'];
    $num3 = $_POST ['num3'];
    $num4 = $_POST ['num4'];
    $media = ($num1 + $num2 + $num3  + $num4)/4;
    
// Declaração do if
    if ($media > 5){ 
        echo "O aluno está aprovado com média igual a $media"; 
    }

    else{
        echo "O aluno foi reprovado com a nota de $media"; 
        }
?>