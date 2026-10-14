Материал для изучения: https://metanit.com/php/tutorial/2.14.php

<h2>Задача 1:</h2>
<p>Для каждой введенной цифры (0 — 9) вывести соответствующее ей название на английском языке (0 — zero, 1 — one, 
2 — two,... ). 
</p>

<form action = "" > 
    <p>ВВЕДИТЕ ЧИСЛО : </p>
    <input name ="number" > 
    <input type ="submit" value = "Отправить">

</form>

<?php
if(isset($_GET['number'])){
$number=$_GET['number'];
switch ($number) {
    case 0: echo "zero"; break;
    case 1: echo "one"; break;
    case 2: echo "two"; break;
    case 3: echo "three"; break;
    case 4: echo "four"; break;
    case 5: echo "five"; break;
    case 6: echo "six"; break;
    case 7: echo "seven"; break;
    case 8: echo "eight"; break;
    case 9: echo "nine"; break;
    default: echo "Это не цифра от 0 до 9";
}
}
?>

<h2>Задача 2:</h2>
<p>Написать программу, которая по введенному числу от 1 до 
12 (номеру месяца) выдает все приходящиеся на этот месяц праздничные дни (например, если введено число 1, то должно получиться 1 января — Новый год, 7 января — Рождество

</p>

<form action = "" > 
    <p>ВВЕДИТЕ ЧИСЛО : </p>
    <input name ="number" > 
    <input type ="submit" value = "Отправить">

</form>

<?php
if(isset($_GET['number'])){
$month=$_GET['number'];
switch ($month) {
    case 1:
        echo "1 января — Новый год, 7 января — Рождество";
        break;
    case 2:
        echo "23 февраля — День защитника Отечества";
        break;
    case 3:
        echo "8 марта — Международный женский день";
        break;
    case 4:
        echo "В этом месяце нет официальных государственных праздников";
        break;
    case 5:
        echo "1 мая — Праздник Весны и Труда, 9 мая — День Победы";
        break;
    case 6:
        echo "12 июня — День России";
        break;
    case 7:
        echo "В этом месяце нет официальных государственных праздников";
        break;
    case 8:
        echo "В этом месяце нет официальных государственных праздников";
        break;
    case 9:
        echo "В этом месяце нет официальных государственных праздников";
        break;
    case 10:
        echo "В этом месяце нет официальных государственных праздников";
        break;
    case 11:
        echo "4 ноября — День народного единства";
        break;
    case 12:
        echo "31 декабря — Новогодние каникулы";
        break;
    default:
        echo "Ошибка: введите число от 1 до 12";
}
}
?>

<h2>Задача 3: </h2>
<p>Написать программу, позволяющую по последней цифре числа 
определить последнюю цифру его квадрата. 
</p>

<form action = "" > 
    <p>ВВЕДИТЕ ЧИСЛО : </p>
    <input name ="number8" > 
    <input type ="submit" value = "Отправить">

</form>

<?php
if(isset($_GET['number8'])){
$number8=$_GET['number8'];
$last_number8 = $number8 % 10; 

switch ($last_number8) {
    case 0: $result = 0; break; // 0*0 = 0
    case 1: $result = 1; break; // 1*1 = 1
    case 2: $result = 4; break; // 2*2 = 4
    case 3: $result = 9; break; // 3*3 = 9
    case 4: $result = 6; break; // 4*4 = 16 (заканчивается на 6)
    case 5: $result = 5; break; // 5*5 = 25 (заканчивается на 5)
    case 6: $result = 6; break; // 6*6 = 36 (заканчивается на 6)
    case 7: $result = 9; break; // 7*7 = 49 (заканчивается на 9)
    case 8: $result = 4; break; // 8*8 = 64 (заканчивается на 4)
    case 9: $result = 1; break; // 9*9 = 81 (заканчивается на 1)
}


echo "Последняя цифра квадрата: " . $result;
}
?>

<h2>Задача 4:</h2>
<p>Для целого числа к от 1 до 99 напечатать фразу «Мне к лет», 
учитывая при этом, что при некоторых значениях к слово «лет» надо заменить на слово «год» или «года». Например, 11 лет, 22 года, 51 год.
</p>

<form action = "" > 
    <p>ВВЕДИТЕ ЧИСЛО : </p>
    <input name ="numbe" > 
    <input type ="submit" value = "Отправить">

</form>
<?php
if(isset($_GET['numbe'])){
$k =$_GET['numbe'];
$lastDigit = $k % 10;
$lastTwoDigits = $k % 100;

switch (true) {
    // Исключение для чисел от 11 до 14 (всегда "лет")
    case ($lastTwoDigits >= 11 && $lastTwoDigits <= 14):
        $word = 'лет';
        break;
    default:
        switch ($lastDigit) {
            case 1:
                $word = 'год';
                break;
            case 2:
            case 3:
            case 4:
                $word = 'года';
                break;
            default:
                $word = 'лет';
                break;
        }
        break;
} 

echo "Мне {$k} {$word}";
}
?>

