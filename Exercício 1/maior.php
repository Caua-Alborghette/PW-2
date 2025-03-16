
<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");

$font_family = 'comic sans';
$font_size = '18 px';
$border = '1px solid';

?>

<?php
        $num1 = $_POST ['num1'];
        $num2 = $_POST ['num2'];

        if ($num1 > $num2){
        echo "$num1 é maior que $num2";
        }
        else if ($num2 > $num1){ 
        echo "$num2 é maior que $num1"; 
        }
        else{
        echo "$num2 é igual $num1"; 
        }


?>