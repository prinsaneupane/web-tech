<?php
$file = "student.txt";

$handle = fopen($file, "a");

if ($handle) {
    fwrite($handle, "This line is appended to the file.\n");

    echo "Data appended successfully";

    fclose($handle);
} else {
    echo "File append failed";
}
?>