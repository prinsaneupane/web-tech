<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>
</head>
<body>

<h2>Personal Information</h2>
<hr>

<?php
$name = "Prinsa Neupane";
$age = 20;
$city = "Kathmandu";
$favoriteColor = "Purple";

echo "<p>Name: $name</p>";
echo "<p>Age: $age</p>";
echo "<p>City: $city</p>";
echo "<p>Favorite Color: $favoriteColor</p>";
echo "<p>Today's Date: " . date("Y-m-d") . "</p>";
?>

</body>
</html>