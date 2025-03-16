<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="styles.css" rel="stylesheet" >
</head>
<body>
        
</body>
</html>
<?php
        $sal = $_POST ['num1'];
        $filhos = $_POST ['num2'];
        $sala = 0;
        $salf = 0;
        if ($sal <= 800){
        $sala = $sal + $sal * 0.30; 
        }
        
        else{
        $sala = $sal;
        }

        if ($filhos > 1)
        $salf = $sala + ( $filhos * 90);
        
        else  {
        $salf = $sala;
        }
        echo "O salário final é de $salf";
?>