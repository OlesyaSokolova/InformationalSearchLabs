<html>

<head>
    <title> Чтение данных формы из листинга task1_html.html </title>

</head>

<body>
<style>
    table, th, td {
        border: 1px solid black;
    }
</style>

<?php

$tablesToShowStructue = $_GET["structure"];
$tablesToShowContent = $_GET["content"];

$mysqli_user = "newuser";
$mysqli_password = "password";
$conn = mysqli_connect("localhost", $mysqli_user, $mysqli_password);
$database = "sample";
if (!$conn ) die("Нет соединения с MySQL");
mysqli_select_db($conn, $database)
or die ("Нельзя открыть $database: ".mysqli_error($conn));
print "<dl><dd>\n";

for($i =0; $i < count($tablesToShowStructue); $i++)
{
    showTableStructure($conn, $tablesToShowStructue[$i]);
}

for($i =0; $i < count($tablesToShowContent); $i++)
{
    showTableContent($conn, $tablesToShowContent[$i]);
}



function showTableStructure($conn, string $tableName)
{
    $mysql_data_type_hash = array(
        1=>'tinyint',
        2=>'smallint',
        3=>'int',
        4=>'float',
        5=>'double',
        7=>'timestamp',
        8=>'bigint',
        9=>'mediumint',
        10=>'date',
        11=>'time',
        12=>'datetime',
        13=>'year',
        16=>'bit',
        //252 is currently mapped to all text and blob types (MySQL 5.0.51a)
        253=>'varchar',
        254=>'char',
        246=>'decimal'
    );
        echo "<h3 style=\"color: blue\"><b>Структура таблицы $tableName</b></h3>";
        $query_res = mysqli_query($conn,"SELECT * from $tableName");
        $num_fields = mysqli_num_fields($query_res);
        //print "<dl><dd>\n";
        for ($x=0; $x<$num_fields; $x++)
        {  #2
            $properties = mysqli_fetch_field_direct($query_res, $x);
            print "<i>";
            print $mysql_data_type_hash[$properties->type];
            // тип поля
            print "</i> <i>";
            print $properties->length;
            // max-ая длина поля
            print "</i> <b>";
            print $properties->name;
            // имя поля
            print "</b> <i>";
            print $properties->flags;

            // флаги поля (not null и т.п.)
            print "</i><br>\n";
        }  #2
        //print "</dl>\n";
    //print "</dl>\n";
}

function showTableContent($conn, string $tableName)
{
    echo "<h3 style=\"color: blue\"><b>Содержимое таблицы $tableName</b></h3>";
    print "<p><table style='width: 500px'>\n";
    print "<tr>\n";
    $result = mysqli_query($conn, "SELECT * FROM $tableName");
    $num_fields = mysqli_num_fields($result);
    for ($x = 0; $x < $num_fields; $x++) {
        $name = mysqli_fetch_field_direct($result, $x)->name;
        print "\t<th>$name</th>\n";
        // печатаем имя $x-того столбца
    }
    print "</tr>\n";
    while ($a_row = mysqli_fetch_row($result)) {      // печатаем содержимое столбцов
        print "<tr>\n";
        foreach ($a_row as $field)  // $a_row – массив
            print "\t<td>$field</td>\n";
        print "</tr>\n";
    }
    print "</table>\n";

}
mysqli_close($conn);
?>


<p style='text-align: left'><a href='task1_html.html'>назад</a>

</body>


