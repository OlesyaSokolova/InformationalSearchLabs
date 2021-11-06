<html> <head>
    <title> Задание 6. </title>
</head> <body>
<p><i>  1. Создайте массив $treug[] "треугольных" чисел, т.е. чисел вида n(n+1)/2 (где n=1,2,: 10) и выведите значения этого массива на экран в строку (через 2 пробела).
        2. Создайте массив $kvd[] квадратов натуральных чисел от 1 до 10, выведите значения этого массива на экран в строку.
        3. Объедините эти 2 массива в массив $rez[], выведите результат на экран.
        4. Отсортируйте массив $rez[], выведите результат на экран.
        5. Удалите в массиве $rez[] первый элемент, выведите результат на экран.
        6. С помощью функции array_unique() удалите из массива $rez[] повторяющиеся элементы, результат занесите в массив $rez1[] и выведите его на экран.
    </i> </p>

<?php

function myPrintArray($array)
{
    $delimiter = str_repeat('&nbsp;', 2);
    foreach ($array as $value)
    {
        $value .= $delimiter;
        echo $value;
    }
    echo '<br>';
}

function treugNumbers()
{
    $n = 10;
    $treug = array();
    for ($i=1;  $i <= $n;  $i++)
    {
        $treug[$i] = $i*($i+1)/2;
    }
    return $treug;
}

function squares()
{
    $n = 10;
    $kvd = array();
    for ($i=1;  $i <= $n;  $i++)
    {
        $kvd[$i] = $i*$i+1;
    }
    return $kvd;
}

$treug = treugNumbers();
myPrintArray($treug);

$kvd = squares();
myPrintArray($kvd);

$rez = array_merge($treug, $kvd);
myPrintArray($rez);

$rez_sorted = $rez;
sort($rez_sorted);
myPrintArray($rez_sorted);

$rez_cropped = $rez;
unset($rez_cropped[0]);
myPrintArray($rez_cropped);

$rez1 = array_unique($rez);
myPrintArray($rez1);
?>

