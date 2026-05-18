<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "password123") {
        if (isset($_POST['remember'])) {
            setcookie("username", $username, time() + (7 * 24 * 60 * 60));
        }

        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid login details.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Login</title>
</head>
<body>

<h2>Cookie Login</h2>

<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>

    <input type="checkbox" name="remember"> Remember Me<br><br>

    <input type="submit" value="Login">
</form>

</body>
</html>