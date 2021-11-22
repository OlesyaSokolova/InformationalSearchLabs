<html> <head>
    <title> Задание 4</title> </head> <body>
<?php

$user = $_POST["user"];
$hobby = $_POST["hobby"];

print "<p>$user, оказывается, вы предпочитаете</p>";
print "<ul>\n";
foreach ($hobby as $value){
    print "<li>$value\n";
}
print "</ul>\n";
?>

</body> </html>
