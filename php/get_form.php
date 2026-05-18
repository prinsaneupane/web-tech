<!DOCTYPE html>
<html>
<head>
    <title>GET Method Form</title>
</head>
<body>

<h2>GET Method Example</h2>

<form method="get" action="">
    Name: <input type="text" name="name"><br><br>
    Roll: <input type="text" name="roll"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    $roll = $_GET['roll'];

    echo "<h3>Form Data using GET Method</h3>";
    echo "Name: " . $name . "<br>";
    echo "Roll: " . $roll;
}
?>

</body>
</html>