<?php
$file = "student.txt";

$handle = fopen($file, "w");

if ($handle) {
    echo "File created successfully";
    fclose($handle);
} else {
    echo "File creation failed";
}
?>