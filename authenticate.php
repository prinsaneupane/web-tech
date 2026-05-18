<?php
set_error_handler(function($errno, $errstr) {
    echo "Custom Error: $errstr";
});

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) || empty($password)) {
    die("Error: Username and password cannot be empty.");
}

if ($username == "admin" && $password == "password123") {
    echo "<h2>Login Successful</h2>";
    echo "Welcome, $username!";
} else {
    echo "<h2>Invalid username or password</h2>";
}
?>