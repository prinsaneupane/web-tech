<?php
include "dbconn.php";

if(isset($_POST['sub'])){
    $id = trim($_POST['id']);

    if(empty($id)){
        $error = "Please enter ID";
    } else {
        // Prepare statement
        $stmt = $conn->prepare("DELETE FROM student WHERE id = ?");
        if(!$stmt){
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("i", $id);
        $stmt->execute();

        if($stmt->affected_rows > 0){
            header("Location: display.php");
            exit();
        } else {
            $error = "No record found with ID $id or data not deleted.";
        }

        $stmt->close();
    }
}
?>
<html>
<head>
    <title>Delete Student</title>
</head>
<body>

<form action="" method="post">
    <h2>Enter the ID to delete student</h2>

    <?php
    if(isset($error))
    {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>

    <label>Enter Student ID:</label>
    <input type="text" name="id" required>

    <br><br>

    <input type="submit" name="sub" value="Delete">

</form>

</body>
</html>