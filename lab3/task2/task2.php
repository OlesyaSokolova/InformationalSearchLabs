<html lang="RU"> <head>
    <meta charset="UTF-8" />
    <title> Задание 2</title>
</head> <body>

<style>
    body {
        background-color: silver;
        color: black;
    }
    a:link {
        color: white;
    }
    a:active {
        color: maroon;
    }
</style>

<?php


$align = $_GET["align"];
$valign = $_GET["valign"];
?>

<table style='border-color: black'>
    <tr>
        <td style='background-color: white;
            height: 100px;
            width: 100px;
            text-align: <?= $align; ?>;
            vertical-align:  <?= $valign; ?>'>Text</td>
    </tr>
</table>

<p><b>Выберите горизонтальное расположение:</b></p>

<form action="task2.php" method="GET" style="justify-content: center">
    <p><input type="radio" name="align" value="left" checked>left</p>
    <p><input type="radio" name="align" value="center">center</p>
    <p><input type="radio" name="align" value="right">right</p>

    <p><b>Выберите вертикальное расположение:</b></p>

    <p><input type="checkbox" name="valign" value="top" checked>top</p>
    <p><input type="checkbox" name="valign" value="middle">middle</p>
    <p><input type="checkbox" name="valign" value="bottom">bottom</p>

    <p><input type="submit" value="Выполнить"></p>

</form>

</body> </html>
