<?php
include "dbconn.php";

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM student WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $sub = $_POST['sub'];
    $mark = $_POST['mark'];

    $sql = "UPDATE student SET
            name='$name',
            roll='$roll',
            subject='$sub',
            marks='$mark'
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: view.php");
    } else {
        echo "Update failed: " . mysqli_error($conn);
    }
}
?>

<form method="post">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
    Roll: <input type="text" name="roll" value="<?php echo $row['roll']; ?>"><br><br>
    Subject: <input type="text" name="sub" value="<?php echo $row['sub']; ?>"><br><br>
    Mark: <input type="number" name="mark" value="<?php echo $row['mark']; ?>"><br><br>

    <input type="submit" name="update" value="Update">
</form>