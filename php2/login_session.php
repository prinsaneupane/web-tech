<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "password123") {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Login</title>
</head>
<body>

<h2>Session Login</h2>

<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>

</body>
</html>