<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Операции in php</h1>
    <h2>Арифметические </h2>
    <p>+ - * / ** % </p>
    <?php
    $a=33%22;
    echo  $a;
    ?>
    <h2>Инкремент и декремент</h2>
    <?php
    $b=2;
    $c=++$b;
    echo "b=$b,c=$c";
    ?>
    <h2>Операции со строками</h2>
    <?php
    $str1= 'Hello,';
    $str2='PHP!';
    $str3= 'Я учусь на '. 2 . 'курсе';
    echo $str1. $str2, '<br>',$str3;
    ?>
    <h2>Операции сравнения</h2>
    <p><>    <=   >=   ==   !=   ===   !==</p> 
    <?php
    $s= 4 =='4';
    $s1=4 === '4';
    echo $s, $s1;
    ?>
    <h2>логические операции</h2>
    <p>ЛОГИЧЕСКОЕ И (&& and),логическое ИЛИ (|| or и логическое НЕ(!))</p>
    <?php
    $p = true && false; // false
    $p1=true || false; // true
    $p2 = 5 <=7 && 4== 5;// false
    $p3=!$p2;//true
    ?>
    <h2>Операции присваивания</h2>
    <p>= </p>
    $o = ($r=5);
    <p>+= -= *= /= **= %= .=</p>
    <?php
    $L = 42;
    $L+=10;
    $string = 'Hello, ';
    $string .=  'world!';
     echo $string;
    ?>
    <h2>Приоритет операций</h2>
    <p>**</p>
    <p>==  --</p>
    <p>!</p>
    <p>* / %</p>
    <p>+ -</p>
    <p> < > <= >=</p>
    <p>== != === !==</p>
    <p>&&</p>
    <p>||</p>
    <p>= += -=  ....</p>

    <p>Ошибка ( распространённая)
    $a < $b < $c </P>
</body>
</html>