<?php

if (isset ($_POST["site"])) {
    $site = $_POST["site"];
    ob_start();
    header("Location: https://". $site, true);
    ob_end_flush(); //this should be last line of your page
    exit;
}
else { // начало блока else
?>
<html> <head>
    <meta charset="UTF-8" />
    <title> Посылка заголовка с помощью
        функции header() </title>
</head>
<body>

<?php

print "<form action='{$_SERVER['PHP_SELF']}' method='post'>";

?>
<select name="site">
    <option value = "">Поисковые системы
    <?php
    $list_sites = ["www.google.com", "www.rambler.ru", "www.yandex.ru", "www.yahoo.com", "www.altavista.com"];
    $arrayLength = count($list_sites);
    $i = 0;
    while ($i < $arrayLength)
    {
        print "<option value='$list_sites[$i]'>$list_sites[$i]</option>" ;
    $i++;
    }?>
</select>
<input type="submit" value="Перейти">
</form>

<?php
} // конец блока else
?>
</body> </html>
