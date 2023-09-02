<?php include('connection.php');?>

<?php

  if(isset($_POST['add']))
  {
    $coursename=mysqli_real_escape_string($db,$_POST['cr']);
    $image=mysqli_real_escape_string($db,$_POST['img']);

    
      $sql="insert into course(name,img) values('$coursename','$image')";
      mysqli_query($db,$sql);
      header("location:admin.php");

  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- <link rel="stylesheet" href="css/register.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&family=Fira+Sans&family=Jomhuria&family=Open+Sans:ital@1&family=PT+Serif:wght@700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico+One&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&family=Fira+Sans&family=Jomhuria&family=Open+Sans:ital@1&display=swap"
        rel="stylesheet">
    <style>
    /* start register page style */
    body {
        background-color: white;
    }

    p.pr {
        text-align: center;
        font-weight: bold;
        font-size: 30px;
        color: black;
        margin-bottom: 30px;
        padding-top: 20px;
    }

    body form fieldset legend {
        text-align: center;
        font-weight: bold;
        font-size: 30px;
        color: #34495E;

    }

    form {
        width: 450px;
        margin: 200px auto;
        text-align: left;
        background-color: white;

    }



    form input {
        width: 90%;
        margin-left: 15px;
        margin-top: 10px;
        margin-bottom: 40px;
        padding: 10px;
        border-radius: 2px;
    }

    form label {
        color: black;
        font-weight: bold;
        font-size: 25px;
        padding: 40px;
        padding-top: 20px;

    }

    ::placeholder {
        padding: 10px;
        color: #acacac;

    }

    input#check {
        width: 10%;
        float: left;
        margin: 20px;
        margin-top: 10px;
        margin-bottom: 40px;
    }

    form label.check {
        float: left;
        margin-top: -27px;
        margin-left: -40px;
        cursor: pointer;
    }

    form button {
        width: 90%;
        margin: -10px 0 0 20px;
        font-size: 25px;
        font-weight: bolder;
        background-color: #0000CC;
        color: aliceblue;
        border-color: #D4DAE0;
        padding: 10px;
    }

    form button:hover {
        background-color: lightsteelblue;
        color: black;
        cursor: pointer;
    }

    .two {
        color: black;
        font-weight: 600;
        text-decoration: none;
    }

    p.end {
        font-size: 15px;
        text-align: center;
        padding: 20px;
        margin: 20px;
    }

    /* end regeiter page style */
    </style>
</head>



<body>
    <form method="post" action="add_course.php">

        <fieldset>
            <legend></legend>
            <label>course name</label><br>
            <input type="text" required width="50" autofocus maxlength="15" name="cr"><br>
            <label>image</label><br>
            <input required type="text" width="50" range maxlength="15" name="img"><br>
            <button name="add" type="submit">Add</button>

    </form>
</body>


</html>