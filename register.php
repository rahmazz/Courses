<?php include('connection.php');?>

<?php
  if (!isset($_SESSION))
  {
    session_start();
  }


  if(isset($_POST['submit']))
  {


    $username=mysqli_real_escape_string($db,$_POST['un']);
    $email=mysqli_real_escape_string($db,$_POST['em']);
    $pass1=mysqli_real_escape_string($db,$_POST['pas1']);
    $pass2=mysqli_real_escape_string($db,$_POST['pas2']);

    if($pass1 != $pass2)
    {
      echo "password doesn't match";
    }

    else
    {
      $sql="insert into users(name,email,password) values('$username','$email','$pass1')";
      mysqli_query($db,$sql);

      $_SESSION['user']=$username;
      echo "Hello, " . $_SESSION['user'];
      
      }

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&family=Fira+Sans&family=Jomhuria&family=Open+Sans:ital@1&family=PT+Serif:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&family=Fira+Sans&family=Jomhuria&family=Open+Sans:ital@1&display=swap" rel="stylesheet">

</head>



<body>
    <form method="post" action="register.php">
        <fieldset>
            <legend>Register</legend>
            <label>Name</label><br>
            <input type="text" required placeholder="Creat Username" size="50px" autofocus maxlength="15" name="un"><br>
            <label>Email</label><br>
            <input type="email" placeholder="Enter Email" size="50" required name="em"><br>
            <label>password</label><br>
            <input type="password" required placeholder="Creat your Password" size="50px" range maxlength="15" minlength="3" name="pas1"><br>
            <label>confirm password</label><br>
            <input required type="password" placeholder="ReEnter Your password" size="50px" range maxlength="15" minlength="3" name="pas2"><br>
            <input type="checkbox" checked id="check">
            <label for="check" class="check">Remember me</label>
            <button name="submit">submit</button>
        </fieldset>
        
    </form>