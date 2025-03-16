<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<?php
// Declaração das variáveis
    $num1 = $_POST ['num1'];
    $num2 = $_POST ['num2'];
    $num3 = $_POST ['num3'];
    $num4 = $_POST ['num4'];
    $media = ($num1 + $num2 + $num3  + $num4)/4;
    
// Declaração do if
    if ($media > 5){ 
        echo "<p style='color: aliceblue; font-family: Comic Sans MS; font-size: 20px;'>O aluno está aprovado com média igual a $media</p>";
    }

    else{
        echo "<p style='color: aliceblue; font-family: Comic Sans MS; font-size: 20px;'>O aluno foi reprovado com a nota de $media</p>";
        }
?>
</body>
</html>

