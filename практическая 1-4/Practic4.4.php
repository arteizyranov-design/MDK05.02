<h2>Задание 1</h2>
<p>Дан радиус окружности. Составить функцию для вычисления длины окружности.
Вызвать функцию и вывести результат на экран.</p>
<?php
function calcularrangeOkr($radius) {
    return 2 * pi() * $radius; 
}
$r = 5;
$dlina = calcularrangeOkr($r);
echo "Радиус окружности: " . $r . "<br>";
echo "Длина окружности: " . $dlina;
?>

<h2>Задание 3</h2>
<p>Сделать функцию для нахождения наибольшего делителя заданного числа (кроме его самого).</p>
<?php
function SearchMaxDel($число) {
    $start = floor($число / 2);
    for ($i = $start; $i >= 1; $i--) {
        if ($число % $i == 0) {
            return $i;
        }
    }
    return 1;
}
echo SearchMaxDel(20); 
echo "\n";
echo SearchMaxDel(15); 
echo "\n";
echo SearchMaxDel(17); 
?>

<h2>Задание 4</h2>
Сделать функцию для нахождения всех делителей заданного числа. Функция должна вернуть массив с делителями.
<?php
function getDiv(int $num): array {
    $div = [];
    $sqrt = (int) sqrt($num);

    for ($i = 1; $i <= $sqrt; $i++) {
        if ($num % $i === 0) {
            $div[] = $i;
            // Добавляем парный делитель, если он отличается от $i
            if ($i !== intdiv($num, $i)) {
                $div[] = intdiv($num, $i);
            }
        }
    }

    sort($div);
    return $div;
}
print_r(getDiv(36));
?>

<h2>Задание 5</h2>
<p>Функция принимает массив чисел. Сделайте так, чтобы она возвращала сумму квадратов этих чисел.</p>
<?php
function sumOfSquares(array $numbers): int|float {
    $sum = 0;
    foreach ($numbers as $num) {
        $sum += $num ** 2;
    }
    return $sum;
}
$arr = [1, 2, 3, 4];
echo sumOfSquares($arr);
?>

<h2>Задание 6</h2>

<p>Сделайте функцию convertToString, которая будет готовить данные для вывода на экран с помощью echo. Функция принимает массив и возвращает строку. В функции сделайте проверку, на вложенные массивы. Если внутренний элемент является также массивом, выведите 'array'.</p>
<?php

function convertToString(array $data): string
{
    $result = [];
    foreach ($data as $item) {
        if (is_array($item)) {
            $result[] = 'array';
        } else {
            $result[] = (string) $item;
        }
    }
    return implode(', ', $result);
}
$sampleArray = [
    'Яблоко',
    42,
    ['вложенный', 'массив'],
    'Банан',
    [1, 2, 3]
];
echo convertToString($sampleArray);
?>


<h2>Задание 7</h2>

<p>Прочитайте в приложенных материалах про функции с переменным количеством параметров.

Сделайте функцию, которая принимает переменное количество строк и возвращает их общую длину.</p>




