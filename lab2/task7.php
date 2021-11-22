<html> <head>
    <title>Задание 7.</title>
</head> <body>
<p><i>  1. Создайте ассоциативный массив $cust[]
        с ключами cnum, cname, city, snum и rating
        и значениями: 2001, Hoffman, London, 1001 и 100.
        Выведите этот массив (вместе с именами ключей) на экран.
        2. Отсортируйте этот массив по значениям. Выведите результат на экран.
        3. Отсортируйте этот массив по ключам. Выведите результат на экран.
        4. Выполните сортировку массива с помощью функции sort(). Выведите результат на экран.
    </i> </p>

<?php

$cust = array('cnum' => "2001",
    'cname' => "Hoffman",
    'city' => "London",
    'snum' => "1001",
    'rating' => "100");
print_r($cust);
echo '<br>';

$values_sorted = $cust;
asort($values_sorted);
print_r($values_sorted);
echo '<br>';

$keys_sorted = $cust;
ksort($keys_sorted);
print_r($keys_sorted);
echo '<br>';

$sorted = $cust;
sort($sorted);
print_r($sorted);
echo '<br>';
?>


