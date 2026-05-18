<?php
$file = "student.txt";

$handle = fopen($file, "r");

if ($handle) {
    $content = fread($handle, filesize($file));
    echo nl2br($content);
    fclose($handle);
} else {
    echo "File reading failed";
}
?>