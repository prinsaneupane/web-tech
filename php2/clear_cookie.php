<?php
setcookie("username", "", time() - 3600);

header("Location: dashboard.php");
exit();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Clear Cookie</title>
</head>
<body>

<h2>Cookie Deleted Successfully</h2>

<a href="cookie_login.php">Go Back to Login</a>

</body>
</html>
