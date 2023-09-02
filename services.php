<?php include('connection.php');?>
<?php include('logform.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="icon" type="image/x-icon" href="../images/services.icon.png">
    <title>Services</title>
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    table {
        width: 100%;
        /* height: 700px; */
        margin: auto;
        /* border-bottom: 3px solid #352ba8; */
        background-color: white;
    }

    thead {
        font-weight: bold;
        background-color: #404040;
    }

    th {
        padding: 15px;
        color: white;
    }

    td {
        text-align: center;
        /* background-color: #eee; */
        position: relative;
        font-weight: 600;
        padding: 10px 0 10px 0;

    }

    img {
        width: 250px;
        height: 200px;
        margin: auto;
        margin-left: 5px;
        margin-right: 5px;
        border: 5px solid black;
    }



    a {
        text-decoration: none;
        padding: 5px 10px;
        color: red;
        font-size: 15px;
    }
    </style>
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

    <section id="fold-inner">

        <section id="phpp">
            <?php
        if(isset ($_SESSION['name']))
        {
            echo $_SESSION['name'];
        }
    
        echo"<br>";

        if(isset ($_SESSION['success']))
        {
            echo $_SESSION['success'];
        }
        ?>
        </section>
    </section>






    <!--start content of services page-->

    <!-- start services section -->

    <section id="services">
        <div class="head-section bgc">
            <h2 class="fc">SERVICES</h2>
        </div>
        <p class="page-info">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam et aspernatur nobis quis
            neque, recusandae omnis distinctio doloribus! Expedita rem vitae assumenda delectus molestias autem repellat
            nesciunt sed, omnis tempore exercitationem similique voluptatibus nostrum dignissimos sit! Iste nesciunt
            dignissimos harum hic qui, aliquam numquam excepturi officia blanditiis nihil sunt quasi </p>
        <div>

        </div>
        <div class="container">
            <table>
                <tbody>

                    <tr>
                        <?php
include('connection.php');

$query="select * from course";

$records=mysqli_query($db,$query);

while($data =mysqli_fetch_array($records))
{
?>

                        <td><img src="<?php echo $data['img'];?>"></td>

                        <?php
}
?>
                    </tr>
                    <tr>
                        <?php
include('connection.php');

$query="select * from course";

$records=mysqli_query($db,$query);

while($data =mysqli_fetch_array($records))
{
?>

                        <td>
                            <?php echo $data ['name'];?>
                        </td>

                        <?php
}
?>

                    </tr>


                </tbody>

            </table>

        </div>
    </section>

    <!-- end services section -->
    <!--start content of services page-->


    <!--start  footer  -->
    <footer>
        <p>
            © 2022 All Rights Reserved To DIR SOFT
        </p>
    </footer>
    <!--end  footer  -->