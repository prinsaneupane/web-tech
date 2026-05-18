<?php


$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "lab";

$conn = mysqli_connect($servername, $username, $password, $db, 3306);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>




