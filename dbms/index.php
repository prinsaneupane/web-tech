<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>

<h2>Student Registration Form</h2>

<form action="insert.php" method="post">
    ID: <input type="number" name="id"><br><br>
    Name: <input type="text" name="name"><br><br>
    Roll: <input type="text" name="roll"><br><br>
    Subject: <input type="text" name="sub"><br><br>
    Mark: <input type="number" name="mark"><br><br>

    <input type="submit" name="submit" value="Insert">
</form>

<br>
<a href="view.php">View Students</a>

</body>
</html>