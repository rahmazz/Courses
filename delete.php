<?php include('connection.php');

$code=$_GET['id'];
$sql="delete from course where id='$code'";

$del=mysqli_query($db,$sql);

if($del)
    {
        mysqli_close($db);
        header("location:admin.php");
    }
else{
        echo mysqli_connect_error();
    }

?>