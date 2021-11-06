<html> <head>
    <title> Задание 4. </title>
</head> <body>
<p><i>Используя вложенные циклы for,
        отобразите на экране таблицу сложения чисел от 1 до 10.
        При этом цвет цифр в верхней строке и левом столбце должен быть задан
        через $color вне циклов, а в левой верхней ячейке должен стоять знак "+"
        красного цвета.
        Ширина рамки таблицы равна 1, отступ содержимого ячеек от границы равен 5.
    </i> </p>

<?php

print "<table border='1' cellpadding='5'>\n";

$n = 10;
$borderColor = "blue";
$plusColor = "red";

for ($y=1;  $y <= $n;  $y++)
{
    print "<tr>\n";
    for ($x=1;  $x <= $n;  $x++)
    {
        if($x == 1 && $y == 1)
        {
            print "\t<td> <font color=$plusColor>";
            print "+";
        }
        else {
            if($x == 1 or $y == 1) {print "\t<td><font color=$borderColor>";}
            else {print "\t<td>";}
            print ($x*$y);
        }

        print "</td>\n";

    }
    print "</tr>\n";
}
print "</table>";

?>
</body> </html>
