<?php
$servername="localhost";
$username="root";
$password="";
$database="groupon_db";
$con=mysqli_connect($servername,$username,$password,$database); 
if(!$con)
{
    die("error detected".mysqli_error($con));
}
else
{
    echo"connection initialized successfully";
}
?>
