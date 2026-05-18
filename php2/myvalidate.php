<?php

include"dbconn.php";

if(isset($_POST['submit']))
{
    
    if(empty($_POST['id'])||empty($_POST['name'])||empty($_POST['roll'])||empty($_POST['sub'])||empty($_POST['mark']))
    {
        echo" fill all the form";
    }
    
    else
    {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $roll=$_POST['roll'];
        $sub=$_POST['sub'];
        $mark=$_POST['mark'];
        
        $insq="insert into student values('$id','$name','$roll','$sub','$mark')";
        
        $myquery=mysqli_query($conn,$insq);
        
        if($myquery)
        {
            echo"data inserted";
        }
        else
        {
           echo "Data not inserted: " . mysqli_error($conn);
        }
        

    }
    
}
else
{
    echo"<br> submission fail";
}


?>