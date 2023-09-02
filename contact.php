<?php include('connection.php');?>

<?php
if(isset($_POST['send']))
  {

    $username=mysqli_real_escape_string($db,$_POST['name']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $message=mysqli_real_escape_string($db,$_POST['message']);

    $s="INSERT into `contact`(`name`,`email`,`message`) values('$username','$email',' $message')";
    $result=mysqli_query($db,$s);
    
    $_SESSION['user']=$username;
    echo "Your message sent successfully, " . $_SESSION['user'];

  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="icon" type="image/x-icon" href="../images/phone.icon.png">

    <title>Contact Us</title>
</head>

<body>

    <!-- start header  -->
    <header class="bgc">
        <div class="container">
            <div class="logo">
                <img src="images/blender_logo.png" alt="">
            </div>
            <nav>
                <ul>
                    <li><a href="index.html" class="fc">HOME</a></li>
                    <li><a href="about.html" class="fc" target="_blank">About</a></li>
                    <li><a href="contact.html" class="fc" target="_blank">Contact</a></li>
                    <li><a href="services.html" class="fc" target="_blank">Services</a></li>
                    <li><a href="login.html" class="fc" target="_blank">login</a></li>
                    <li><a href="register.html" class="fc" target="_blank">register</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- end header  -->




    <!-- start section fold section (photo of contact us)-->
    <section id="fold-inner">
    </section>
    <!-- end section fold section (photo of contact us)--






    <--  start contact us section  -->





    <!-- start contact us word -->
    <section id="contact-us">
        <div class="head-section bgc">
            <h2 class="fc">Contact Us</h2>
        </div>
        <!-- start contact us word -->



        <!-- /* start email phone adress (first container) */ -->
        <div class="container">
            <div class="contact-area">
                <p class="top-word">Email</p>
                <p>rahmaramadan01007@gmail.com</p>
            </div>

            <div class="contact-area">
                <p class="top-word">Phone</p>
                <p>+02 01525634518</p>
            </div>

            <div class="contact-area">
                <p class="top-word">Address</p>
                <p>20 aboelfeda new cairo </p>
            </div>
        </div>
        <!-- /*end email phone adress */ -->







        <!-- start second container (القديم بتاع صفحه ال html)-->
        <div class="container">
            <form method="post" action="contact.php">

                <div class="form-group">
                    <label for="your name1">Your Name</label>
                    <input type="text" name="name" id="your name1" required>
                </div>

                <div class="form-group">
                    <label for="Your Email1">Your Email</label>
                    <input type="text" name="email" id="Your Email1" required>
                </div>

                <div class="form-group">
                    <label for="Your Message1">Your Message</label>
                    <textarea name="message" id="Your Message1" rows="10" required></textarea>
                </div>
                <div class="form-group">
                    <button name="send" type="submit">send message</button>
                </div>

            </form>
        </div>
    </section>
    <!-- end second container (القديم بتاع صفحه ال html)-->




    <!--  end contact us section  -->









    <!--start  footer  -->
    <footer>
        <p>
            © 2022 All Rights Reserved To DIR SOFT
        </p>
    </footer>
    <!--end  footer  -->