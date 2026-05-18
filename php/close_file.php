<?php
$file = "student.txt";

$handle = fopen($file, "r");

if ($handle) {
    echo "File is open<br>";

    fclose($handle);

    echo "File closed successfully";
} else {
    echo "File opening failed";
}
?>