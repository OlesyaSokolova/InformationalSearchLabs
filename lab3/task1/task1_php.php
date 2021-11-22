<html>

<head>
    <title> Чтение данных формы из листинга task1_html.html </title>
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
</head>

<body>

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

<p style='text-align: left'><a href='task1_html.html'>назад</a>

</body>

