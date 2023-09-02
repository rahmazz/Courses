<?php include('connection.php');
  if (!isset($_SESSION))
  {
    session_start();
  }


  if(isset($_POST['submit']))
  {


    $username=mysqli_real_escape_string($db,$_POST['un']);
    $pass=mysqli_real_escape_string($db,$_POST['pas1']);

      $s="select * from users where `name`='$username' and `password`='$pass'";
      $q=mysqli_query($db,$s);

  if(mysqli_num_rows($q)==1){
        $_SESSION['name']=$username;
        $_SESSION['success']="Welcome Dear";
      }
      else
      {
        echo "Wrong Data !!!";
      }
      header('location:services.php');

    }
  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['name']);
     unset($_SESSION['success']);
    header('location:login.php');
  }
?>