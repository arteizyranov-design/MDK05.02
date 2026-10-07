<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Задача 1:</h2>

</p>Напиши программу, которая последовательно выводит на экран числа в геометрической прогрессии.

Стартовое значение, с которого должна начаться последовательность, записано в переменную startNumber.

Множитель записан в переменную multiplier.

Количество чисел записано в переменную quantity.</p>
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
<h2>Задача 2:</h2>

</p>Напишите универсальную программу, которая вычисляет сумму чисел от 1 до n.

Число, до которого нужно складывать числа (включительно), указано в переменной lastNumber.

Найдите сумму всех чисел и сохраните результат в переменную sum.

Выведите её на экран.</p>
<?php
$lastNumber=9;
$sum=0;
$currentNumber = 1;
while ($currentNumber <= $lastNumber) {
    $sum += $currentNumber;
    $currentNumber++;     
}
echo "Сумма чисел от 1 до $lastNumber равна: $sum"
?>
</body>
</html>        
<h2>Задача 3</h2>

<p>Напишите универсальную программу, которая находит произведение всех чётных чисел из последовательности от 1 до n.

Число, до которого идёт последовательность (включительно), записано в переменную lastNumber

Найдите произведение всех чисел и сохраните результат в переменную multiplicationResult. Выведите ее на экран.</p>
<?php

$lastNumber = 10;
$multiplicationResult = 1;
$hasEven = false;

for ($i = 1; $i <= $lastNumber; $i++) {
    if ($i % 2 === 0) {
        $multiplicationResult *= $i;
        $hasEven = true;
    }
}

// Если чётных чисел в диапазоне не было (например, при n = 1), результат равен 0
if (!$hasEven) {
    $multiplicationResult = 0;
}

echo $multiplicationResult;

?>
<h2>Задача 4:</h2>

<p>Начав тренировки, спортсмен в первый день пробежал 10 км.

Каждый день он увеличивал дневную норму на 10% нормы предыдущего дня. Какой суммарный путь пробежит спортсмен за n дней?</p>

<h2>Задача 5:</h2>

<p>У гусей и кроликов вместе 64 лапы. Сколько может быть кроликов и гусей (указать все сочетания)?</p>

