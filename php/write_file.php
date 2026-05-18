<?php
$file = "student.txt";

$handle = fopen($file, "w");

if ($handle) {
    fwrite($handle, "This is written into the file.\n");
    fwrite($handle, "PHP file handling practical.\n");

    echo "Data written successfully";

    fclose($handle);
} else {
    echo "File writing failed";
}
?>