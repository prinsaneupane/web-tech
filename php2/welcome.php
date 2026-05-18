<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login_session.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>

<h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>

<p>Session ID: <?php echo session_id(); ?></p>

<a href="logout.php">Logout</a>

</body>
</html>