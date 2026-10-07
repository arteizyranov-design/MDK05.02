<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Задача 1:

Напиши программу, которая последовательно выводит на экран числа в геометрической прогрессии.

Стартовое значение, с которого должна начаться последовательность, записано в переменную startNumber.

Множитель записан в переменную multiplier.

Количество чисел записано в переменную quantity.</h2>
<?php
$startNumber=4;
$multiplier=3;
$quantity=4;
echo  "Начальное число =$startNumber","<br>", "<br>" ,"Множитель =$multiplier","<br>", "<br>","Количество чисел=$quantity","<br>", "<br>";
$currentNumber = $startNumber;
for ($i=0;$i<$quantity;$i++){
    echo "Порядковый номер =$currentNumber","<br>";
    echo $currentNumber ;
     $currentNumber *= $multiplier;
}
?>
<h2>Задача 2:

Напишите универсальную программу, которая вычисляет сумму чисел от 1 до n.

Число, до которого нужно складывать числа (включительно), указано в переменной lastNumber.

Найдите сумму всех чисел и сохраните результат в переменную sum.

Выведите ее на экран.</h2>
<?php
$a=1
?>
</body>
</html>
    

