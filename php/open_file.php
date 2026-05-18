<?php
$file = "student.txt";

$handle = fopen($file, "r");

if ($handle) {
    echo "File opened successfully";
    fclose($handle);
} else {
    echo "File opening failed";
}
?>