<html>
<head>
</head>
<body>
<form action="" method="post">
<label>Update value based on Id Value<br></label>
<label>student id:</label>
<input type="number" name="id"><br><br>
<label>student name:</label>
<input type="text" name="name"><br><br>
<label>Roll no:</label>
<input type="number" name="rollno"><br><br>
<label>subject:</label>
<input type="text" name="subject"><br><br>
<label>Mark:</label>
<input type="number" name="mark"><br><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST['submit']))
{
if(
empty($_POST['id']) ||
empty($_POST['name']) ||
empty($_POST['rollno']) ||
empty($_POST['subject']) ||
empty($_POST['mark'])
)
{
echo "Fill all the fields";
}
else
{
include "dbconn.php";
$id = $_POST['id'];
$s_name = $_POST['name'];
$s_rollno = $_POST['rollno'];
$sub = $_POST['subject'];
$marks = $_POST['mark'];
$update_query = "UPDATE student
SET name='$s_name',
roll='$s_rollno',
sub='$sub',
mark='$marks'
WHERE id='$id'";
$update_q = mysqli_query($conn, $update_query);
if($update_q)
{
if(mysqli_affected_rows($conn) > 0)
{
echo "Updated successfully";
header("Location: display.php");
exit();
}
else
{
echo "No record found with this ID";
}
}
else
{
echo "<br> Error: " . mysqli_error($conn);
}
}
}
?>
</body>
</html>