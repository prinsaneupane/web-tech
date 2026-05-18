<?php

include "dbconn.php";

$id = $_GET['id'];

$sql = "DELETE FROM student WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: view.php");
} else {
    echo "Delete failed: " . mysqli_error($conn);
}

?>