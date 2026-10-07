<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Формула 1</h1>
   <?php
    $a = 5;
    $b = 4;
    $c = 2;
    $d = 3;

    echo "a= $a,b=$b,c=$c,d=$d" , "<br>", "<br>";
    echo " Формула ((a / c) * (b / d)) - ((a * b - c) / (c * d))", "<br>", "<br>";
    echo "Считаем (($a / $c) * ($b / $d)) - (($a * $b - $c) / ($c * $d))", "<br>", "<br>";
    $result = (($a / $c) * ($b / $d)) - (($a * $b - $c) / ($c * $d)) ;
    echo "Результат вычисления: " . $result;
    ?>

    <h1> Формула 2</h1>
   <?php
    $x = 4;
    $y = 2;
    echo "x=$x,y=$y", "<br>", "<br>";
    echo "Формула (x + y) / (y + 1) - (x * y - 12) / (34 + x)", "<br>", "<br>";
    echo "Считаем ($x + $y) / ($y + 1) - ($x * $y - 12) / (34 + $x)", "<br>", "<br>";
    $result = ($x + $y) / ($y + 1) - ($x * $y - 12) / (34 + $x);

    echo "Результат вычислений: " . $result;
    ?>
    <h1> Формула 3-4</h1>
    <?php
        $x = 4;
        $y = 2;
    echo "x=$x,y=$y", "<br>", "<br>";
     echo "Формула ((x + 1) / (x - 1))**4 + 18 * x * y**2 / ((1 + 1 / x**2)**5 - 12 * x**2 * y)", "<br>", "<br>";
     echo "Считаем (($x + 1) / ($x - 1))**4 + 18 * $x * $y**2 / ((1 + 1 / $x**2)**5 - 12 * $x**2 * $y)", "<br>", "<br>";
$result = (($x + 1) / ($x - 1))**4 + 18 * $x * $y**2 / ((1 + 1 / $x**2)**5 - 12 * $x**2 * $y);

echo "Результат вычислений: " . $result;
?>

</body>
</html>