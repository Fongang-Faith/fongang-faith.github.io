<?php
include 'database.php';
$email = $_POST['email'];

$sql = "SELECT * FROM user WHERE email = '$email'";
$result = $con->query($sql);

if ($result->num_rows > 0) {

    echo " This Email already exists.";
} 

else{
if(isset($_POST['submit']))
{
    $name=$_POST['uname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

  $sql="INSERT into user(name,email,password) values('$name','$email','$password')";
  if(mysqli_query($con,$sql))
{
     
     echo "<script>window.open('login.php','_self')</script>";
}
else
{
   echo "error:".mysql_error($con);

}
mysqli_close($con);
}
}
//}
?> 
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <title>Document</title>
    </head>
    <body><br>
      <a href="insert.php">create an account </a><br>
      <p>already have an account?<a href="login.php">click here to login</a></p>
      
    </body>
    </html>