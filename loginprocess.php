<?php
include 'database.php';
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * from user where email='$email' and password='$password'";
    $que=mysqli_query($con,$sql);
    if(mysqli_num_rows($que)>0)
    {
       
       echo "<script>window.open('index.html','_self')</script>";
    }
    else
    { 
        echo "<script>window.open('login.html','_self')</script>";
        
    }
   
}
?>