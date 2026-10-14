<h1>оператор выбора - switch</h1>
<?php
$a=10;
switch ($a) {
    case 1: 
        echo 'a=1';
        break;
     case 2: 
        echo 'a=2';
        break;
     case 5: 
        echo 'a=5';
        break;
     case 15: 
        echo 'a=15';
        break;
        default:
        echo 'Число не нашлось';
}
?>