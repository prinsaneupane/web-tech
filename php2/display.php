<?php
include"dbconn.php";
$display_query="SELECT * FROM student";
$display_exec=mysqli_query($conn,$display_query);

if($display_exec)
{
         $record=mysqli_num_rows($display_exec);
       // echo"<br>$record";
         echo"<table>";
             echo"<tr>";
             echo"<th>student id</th>";
             echo"<th>name</th>";
             echo"<th>rollno</th>";
             echo"<th>subject</th>";
             echo"<th>mark</th>";
             echo"</tr>";
        
            while($row=mysqli_fetch_assoc($display_exec))
            {
                $id=$row['id'];
                $name=$row['name'];
                $rollno=$row['roll'];
                $subject=$row['sub'];
                $mark=$row['mark'];
                echo"<tr>";
                echo"<td>$id</td>";
                 echo"<td>$name</td>";
                 echo"<td>$rollno</td>";
                 echo"<td>$subject</td>";
                 echo"<td>$mark</td>";
                 echo"<td><a href='delete.php'/>delete page</td>";
                 echo"<td><a href='update.php'/>update page</td>";
                 echo"<td><a href='webform.php'/>weform page</td>";
                 echo"</tr>";

            }
             
        echo"</table>";
    }
?>