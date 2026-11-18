<h1>Работа со строками</h1>
<h2>создание строк</h2>
<?php
$str1 = 'Hello';
$str2 = "world";
?>
<h2>Соединение строк</h2>
<?php
echo $str1 . ', ' . $str2 . '!' ,"<br>";
echo "$str1 , $str2 !";
?>
<h2>Обращение к символу</h2>
<?php
echo $str1[0], '- первый символ' , '<br>';
$sym = $str2[2];
$str2[2] = 'Y';
echo $str2;
?>
<h2>Длина стороки</h2>
<?php
$len = strlen($str1);
echo "Длина строки str1 -  $len символов";
?>
