<?php
$mysqli_user = "newuser";
$mysqli_password = "newuser";
$conn = mysqli_connect("localhost", $mysqli_user, $mysqli_password);
$database = "sample";
if (!$conn ) die("Нет соединения с MySQL");
mysqli_select_db($conn, $database)
or die ("Нельзя открыть $database: ".mysqli_error($conn));


