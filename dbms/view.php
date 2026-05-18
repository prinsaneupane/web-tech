<?php
include "dbconn.php";

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
</head>
<body>

<h2>Student Records</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Roll</th>
    <th>Subject</th>
    <th>Mark</th>
    <th>Action</th>
</tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['roll']; ?></td>
    <td><?php echo $row['subject']; ?></td>
    <td><?php echo $row['marks']; ?></td>
    <td>
        <a href="update.php?id=<?php echo $row['id']; ?>">Update</a> |
        <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>
<?php
}
?>

</table>

</body>
</html>