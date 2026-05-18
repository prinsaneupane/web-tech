<?php
echo "<h2>Error vs Exception Demo</h2>";

echo "<h3>1. Fatal Error Example</h3>";
echo "Trying to include a missing file...<br>";

// This will cause an error
include("file_that_does_not_exist.php");

echo "This line may execute after include warning.<br>";

echo "<h3>2. Warning Error Example</h3>";

$a = 10;
$b = 0;

// This causes division by zero error
$result = $a / $b;

echo "Result: " . $result . "<br>";
?>