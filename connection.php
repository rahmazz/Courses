<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ecommerce";
$db= mysqli_connect($servername,$username,$password,$dbname);

if(!$db){
    die("connectionfailed:".mysqli_connect_error());
}

?>