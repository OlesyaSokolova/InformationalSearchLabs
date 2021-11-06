<html> <head>
    <title> Задание 5. </title>
</head> <body>
<p><i> Cоздайте 4 функции с именами Ru(), En(), Fr(), De().
        Каждая функция выводит на экран приветствие на соответствующем языке:
        Ru() - "Здравствуйте!",
        En() - "Hello!",
        Fr() - "Bonjour!" и
        De() - "Guten Tag!".

        Эти функции имеют аргумент $color, который определяет цвет выводимого текста.
        Используя функцию-переменную $lang(), отобразить на экране одно из приветствий,
        причем какое приветствие будет выведено и каким цветом -
        задать как параметры в строке вызова скрипта:

        z3-3.php?lang=Ru&color=[назв-е цвета]
        En/Fr/De
    </i> </p>

<?php

function Ru($color) { print "<p style=
    \"color:$color;\">Здравствуйте!</p>"; }
function Eng($color) { print "<p style=
    \"color:$color;\">Hello!</p>"; }
function De($color) { print "<p style=
    \"color:$color;\">Guten Tag!</p>"; }
function Fr($color) { print "<p style=
    \"color:$color;\">Bonjour!</p>"; }

$lang = htmlspecialchars($_GET["lang"]);
$color = htmlspecialchars($_GET["color"]);

$lang($color);

?>

