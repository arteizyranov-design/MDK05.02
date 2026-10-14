<h1>оператор выбора - switch</h1>
<form action = "" > 
    <p>ВВЕДИТЕ ЧИСЛО : </p>
    <input name ="number" > 
    <input type ="submit" value = "Отправить">

</form>

<?php
if(isset($_GET['number'])){
$a=$_GET['number'];
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
}else{
    echo 'Данные не получены';
}

?>