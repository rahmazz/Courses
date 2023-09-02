<?php include('connection.php');

$code=$_GET['id'];
$sql="select*from course where id='$code'";

$qry1=mysqli_query($db,$sql);

$data =mysqli_fetch_array($qry1);

if(isset($_POST['update']))
  {
    $coursename=$_POST['name'];
    $imge=$_POST['img'];


    $sql1="update course set name='$coursename', img='$imge' where id='$code'";
    $edit=mysqli_query($db,$sql1);


    if($edit)
    {
        mysqli_close($db);
    }
    else{
        echo mysqli_connect_error();
    }
    header("location:admin.php");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    h1 {
        text-align: center;
        color: red;
    }

    input {
        width: 200px;
        height: 33px;
        display: flex;
        margin-bottom: 20px;
        margin: 50px auto;
        border: 0.5px solid red;
        padding: 10px;
    }

    button {
        width: 100px;
        height: 33px;
        display: flex;
        margin-bottom: 20px;
        margin: 50px auto;
        border: 0.5px solid black;
        padding: 10px 25px 5px 25px;
        font-weight: bold;

    }
    </style>
</head>

<body>
    <h1>
        update page
    </h1>
    <form method="post">
        <input type="text" name="name" value="<?php echo $data['name']?>" placeholder="enter product name" required>
        <input type="text" name="img" value="<?php echo $data['img']?>" required>
        <button type="submit" name="update">update</button>
    </form>
</body>

</html>