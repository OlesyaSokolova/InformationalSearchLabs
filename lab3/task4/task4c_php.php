<html> <head>
    <title> Задание 4</title> </head> <body>
<?php

$user = $_POST["user"];
$hobby = $_POST["hobby"];

print "<p>$user, оказывается, вы предпочитаете</p>";
foreach ($_POST as $key=>$value){  #1
    if (gettype($value) == "array"){  #2
        print "$key = <br>\n";
        foreach ($value as $v ){
            print "$v<br>";
        }
    }
    else{
        print "$key = $value<br>\n";
    }
}
?>

</body> </html>
