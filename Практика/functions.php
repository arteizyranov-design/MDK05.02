<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Функции</h1>
    <h2>Определение функции и ее вызов</h2>
    <?php
    sayHello();
    function sayHello()
    {
        echo  '<p> Привет!</p>';

    }

sayHello();
sayHello();
    ?>
    <h2>Передача в функцию параметров</h2>
     <?php
    sayHello();
    function sayHello1($name)
    {
        echo  "<p> Привет , $name !</p>";

    }
    sayHello1('Васч');
    sayHello1('Коля');
    sayHello1('Петя');
    ?>
 <h2>Передача в функцию параметров</h2>
 <?php
function printFullName($fName,$IName)
{
    echo "$fName,$IName";
}
printFullName('Ваня','Иванов');
?>
<h2>Функции с параметром по умолчанию</h2>
<?php
function printUserInfo($fName, $IName, $role ='user')
{
    echo "<p>$fName, $IName, роль-$role</p>";
}
printUserInfo('Коля','Иванов','student');
printUserInfo('Вася','Петров');
?>
<h2>Возвращаемое значение</h2>
<?php
function getUserInfo($fName, $IName, $role ='user')
{
    return "$fName, $IName, роль-$role";
}
$info=getUserInfo('Маша','Иванова');
 echo $info;
 function squareRext($l,$w)
 {
    return $l*$w;
 }
 echo '<p>Площадь-' . squareRect(20,5) .  '</p>';
?>
</body>
</html>