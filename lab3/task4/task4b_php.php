<html> <head>
    <title> Задание 4</title> </head> <body>
<?php

$user = $_POST["user"];
$hobby = $_POST["hobby"];

print "<p>$user, оказывается, вы предпочитаете</p>";
foreach ($_POST as $key=>$value) {
    print "$key = $value<br>\n";
}
?>

</body> </html>
