<?php
// Declaração das variáveis
    $num1 = $_POST ['num1'];
    $num2 = $_POST ['num2'];
    $num3 = $_POST ['num3'];
    $num4 = $_POST ['num4'];
    $media = ($num1 + $num2 + $num3  + $num4)/4;
    
// Declaração do if
    if ($media > 5)
    { echo "O aluno está aprovado com média igual a $media"; }
    else{
    echo "O aluno está reprovado com média igual a $média"; 
    }


?>