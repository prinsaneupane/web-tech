<?php

include "dbconn.php";

if (isset($_POST['submit'])) {

    if (
        empty($_POST['id']) ||
        empty($_POST['name']) ||
        empty($_POST['roll']) ||
        empty($_POST['sub']) ||
        empty($_POST['mark'])
    ) {
        echo "Please fill all fields";
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $sub = $_POST['sub'];
        $mark = $_POST['mark'];

        $sql = "INSERT INTO student (id, name, roll, subject, marks)
        VALUES ('$id', '$name', '$roll', '$sub', '$mark')"; 

        if (mysqli_query($conn, $sql)) {
            echo "Data inserted successfully";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

} else {
    echo "Form not submitted";
}

?>