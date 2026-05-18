<?php
function divide($numerator, $denominator) {
    if ($denominator == 0) {
        throw new Exception("Division by zero is not allowed");
    }

    if ($denominator < 0) {
        throw new Exception("Negative denominator not allowed");
    }

    return $numerator / $denominator;
}

$tests = array(
    array(10, 2),
    array(10, 0)
);

foreach ($tests as $test) {
    try {
        $result = divide($test[0], $test[1]);
        echo "Division of {$test[0]} by {$test[1]} = $result<br>";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "<br>";
    }
}
?>