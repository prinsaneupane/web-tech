<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Dashboard</h2>

<?php
if (isset($_COOKIE['username'])) {
    echo "Welcome back, " . $_COOKIE['username'];
} else {
    echo "No Remember Me cookie found.";
}
?>

<br><br>
<a href="clear_cookie.php">Clear Cookie</a>

</body>
</html>