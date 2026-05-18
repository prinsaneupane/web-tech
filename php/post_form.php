<!DOCTYPE html>
<html>
<head>
    <title>POST Method Form</title>
</head>
<body>

<h2>POST Method Example</h2>

<form method="post" action="">
    Name: <input type="text" name="name"><br><br>
    Roll: <input type="text" name="roll"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $roll = $_POST['roll'];

    echo "<h3>Form Data using POST Method</h3>";
    echo "Name: " . $name . "<br>";
    echo "Roll: " . $roll;
}
?>

</body>
</html>