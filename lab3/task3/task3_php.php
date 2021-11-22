<html> <head>
    <title>Результаты теста</title> </head> <body>

<?php


$user = $_POST["user"];
$user_otv = $_POST["city"];
$otv = ["6","9","4","1","3","2","5","8","7"];
print "<p>$user</p>";

$counter = 0;
for ($i = 0; $i < count($user_otv); $i++)
{
    if($user_otv[$i] == $otv[$i])
    {
        $counter++;
    }
}
$result = "вообще не знаете географию";
switch ($counter)
{
    case 9:
        $result = "великолепно знаете географию";
        break;
    case 8:
        $result = "отлично знаете географию";
        break;
    case 7:
        $result =  "очень хорошо знаете географию";
        break;
    case 6:
        $result =  "хорошо знаете географию";
        break;
    case 5:
        $result =  "удовлетворительно знаете географию";
        break;
    case 4:
        $result =  "терпимо знаете географию";
        break;
    case 3:
        $result =  "плохо знаете географию";
        break;
    case 2:
        $result =  "очень плохо знаете географию";
        break;
}
print "<p>Ваш результат: $result</p>";
?>
</body> </html>
