
<h2>Задание 1</h2>

<p>Создайте двумерный массив чисел размерности 3 на 4. Выведите его на экран в виде таблицы.</p>
<?php
$matrix = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];
echo '<table border="1" cellpadding="5">';

foreach ($matrix as $row) {
    echo '<tr>';
    foreach ($row as $cell) {
        echo '<td>' . $cell . '</td>';
    }
    echo '</tr>';
}

echo '</table>';
?>
<h2>Задание 2</h2>

<p>Создайте двумерный массив квадратов чисел от 10 до 99 и выведите его на экран в виде квадратной таблицы.</p>
<?php
$squares = [];
$currentNumber = 10;
for ($i = 0; $i < 9; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $squares[$i][$j] = $currentNumber * $currentNumber;
        $currentNumber++;
    }
}
echo "<table border='1'>";
for ($i = 0; $i < 9; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 10; $j++) {
        echo "<td>" . $squares[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<h2>Задание 3</h2>

<p>Создайте двумерный массив чисел размерности 5 на 4. Найдите в нем максимальный и минимальный элемент. Выведите на экран их индексы по горизонтали и вертикали.</p>

<?php
$rows = 5;
$cols = 4;
$matrix = [];

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        $matrix[$i][$j] = rand(1, 100); 
    }
}
echo "Исходный массив:\n";
foreach ($matrix as $row) {
    echo implode("\t", $row) . "\n";
}
echo "\n";
$maxElement = $matrix[0][0];
$maxRow = 0;
$maxCol = 0;

$minElement = $matrix[0][0];
$minRow = 0;
$minCol = 0;
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        if ($matrix[$i][$j] > $maxElement) {
            $maxElement = $matrix[$i][$j];
            $maxRow = $i;
            $maxCol = $j;
        }
        if ($matrix[$i][$j] < $minElement) {
            $minElement = $matrix[$i][$j];
            $minRow = $i;
            $minCol = $j;
        }
    }
}
echo "Максимальный элемент: $maxElement\n";
echo "Индекс по вертикали (строка): $maxRow, по горизонтали (столбец): $maxCol\n\n";

echo "Минимальный элемент: $minElement\n";
echo "Индекс по вертикали (строка): $minRow, по горизонтали (столбец): $minCol\n";
?>

<h2>Задание 4</h2>
<p>Дано число n, не превышающее 100. Создайте массив размером n×n и заполните его по следующему правилу. На главной диагонали должны быть записаны числа 0. На двух диагоналях, прилегающих к главной, числа 1. На следующих двух диагоналях числа 2, и т.д.
    Sample Input:

5

Sample Output:

0 1 2 3 4

1 0 1 2 3

2 1 0 1 2

3 2 1 0 1

4 3 2 1 0
</p>
<?php
$n = 5;
$matrix = [];
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        $matrix[$i][$j] = abs($i - $j);
    }
}
for ($i = 0; $i < $n; $i++) {
    echo implode(" ", $matrix[$i]) . "\n";
}
?>

<h2>Задание 5</h2>
<p>Создайте двумерный массив товаров в интернет магазине спорттоваров. Ключами для внешнего массива должны быть категории товаров магазина . Внутренние массивы содержат ключи - названия фирм-производителей и значения - названия товаров. Должно быть 4 категории от 0 до 3 товаров в каждой.</p>
<?php
$sportsStore = [
    "Спортивная обувь" => [
        "Nike" => "Кроссовки Air Max",
        "Adidas" => "Бутсы Predator",
        "Puma" => "Кроссовки Running Pro"
    ],
    "Фитнес и йога" => [
        "Reebok" => "Коврик для йоги Touch",
        "Demix" => "Эспандер ленточный"
    ],
    "Водный спорт" => [
        "Speedo" => "Очки для плавания Fastskin"
    ],
    "Зимний спорт" => [
    ]
];
foreach ($sportsStore as $category => $items) {
    echo "<h3>Категория: $category</h3>";
    if (empty($items)) {
        echo "<p>Здесь пока нет товаров</p>";
    } else {
        echo "<ul>";
        foreach ($items as $brand => $productName) {
            echo "<li><strong>$brand</strong> — $productName</li>";
        }
        echo "</ul>";
    }
    echo "<hr>";
}


?>
6
<?php
$products = [
    'Электроника' => ['Смартфон', 'Ноутбук'],
    'Одежда' => ['Футболка', 'Джинсы']
];
$newCategory = 'Обувь'; 
$products[$newCategory] = [];

echo "--- Задание 6 ---\n";
print_r($products);


$newItems = ['Кроссовки', 'Туфли']; // Одномерный массив с товарами

// Добавляем товары в категорию 'Обувь' (добавленную в прошлом задании)
// Используем array_merge или функцию коллекции, чтобы не перезаписать, а дополнить
$products['Обувь'] = array_merge($products['Обувь'], $newItems);

echo "\n--- Задание 7 ---\n";
print_r($products);


// ==========================================
// ЗАДАНИЕ 8: Универсальное добавление категории и товаров
// ==========================================

$searchCategory = 'Электроника'; // Пример 1: категория уже есть
$searchItems = ['Планшет', 'Наушники'];

// Проверяем, существует ли категория в массиве
if (array_key_exists($searchCategory, $products)) {
    // Если категория есть, объединяем существующие товары с новыми
    $products[$searchCategory] = array_merge($products[$searchCategory], $searchItems);
} else {
    // Если категории нет, создаем её и сразу записываем массив товаров
    $products[$searchCategory] = $searchItems;
}
echo "\n--- Задание 8 ---\n";
print_r($products);

?>
