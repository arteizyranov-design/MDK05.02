<h1>Многомерные массивы</h1>

<h2>Объявление</h2>

<?php

$animals =  [['Кот', 'Собака'] , ['Синица', 'Синица' ,'Пингвин'] , ['Лосось','Щука']];

?>

<h2>Вывод на экран</h2>


<?php


foreach ($animals as $group) {

foreach ($group as $animal) {


echo "<p>$animal </p>";


}


}


?>

<h2>Ассоциативные массивы</h2>


<?php

$animals =  [ 'Животные' => ['Кот', 'Собака'] , 'Птицы' => ['Синица', 'Голубь' ,'Пингвин'] , 'Рыбы' => ['Лосось','Щука']];


foreach ($animals as $key => $group) {

echo "<h3> $key </h3>";

foreach ($group as $animal) {


echo "<p>$animal </p>";

}

}


?>


<h2>Обращение к элементам</h2>

<?php

echo $animals ['Птицы'] [1];


?>

<h2>Ещё пример</h2>

<?php


$animals =  [ 'Животные' => [['name' => 'Кот', 'ability' => 'мяукает' ] , [ 'name' =>  'Собака' , 'ability' => 'лает']] ,

 'Птицы' => [[ 'name' => 'Синица', 'ability' => 'летает'] ,  [ 'name' => 'Голубь', 'ability' => 'воркует'] ,[ 'name' => 'Пингвин', 'ability' => 'плавает']] , 


 'Рыбы' => [[ 'name' => 'Лосось', 'ability' => 'вкусный' ] , ['name' =>  'Щука' , 'ability' => 'Исполняет желание' ]]];

foreach ($animals as $key => $group) {

    echo "<h3> $key </h3>";
                             
    foreach ($group as $animal) {

    echo '<p>' . $animal['name'] . ' - ' . $animal['ability'] . '</p>';

    }
}    

?>