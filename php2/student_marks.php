<!DOCTYPE html>
<html>
<head>
    <title>Student Marks</title>
</head>
<body>

<h2>Student Marks and Grades</h2>

<?php
$students = array(
    "Ram" => 95,
    "Sneha" => 82,
    "Pabitra" => 68,
    "Hari" => 45,
    "Gopal" => 76
);

function calculateResult($marks) {
    if ($marks >= 90) {
        return "A";
    } elseif ($marks >= 75) {
        return "B";
    } elseif ($marks >= 50) {
        return "C";
    } else {
        return "F";
    }
}
?>

<table border="1" cellpadding="10">
    <tr>
        <th>Student Name</th>
        <th>Marks</th>
        <th>Grade</th>
    </tr>

    <?php
    foreach ($students as $name => $marks) {
        $grade = calculateResult($marks);

        echo "<tr>";
        echo "<td>$name</td>";
        echo "<td>$marks</td>";
        echo "<td>$grade</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>