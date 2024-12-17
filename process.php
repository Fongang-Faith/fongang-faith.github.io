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
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

  $sql="INSERT into user(name,email,password) values('$name','$email','$password')";
  if(mysqli_query($con,$sql))
{
     
     echo "<script>window.open('login.html','_self')</script>";
}
else
{
   echo "error:".mysqli_error($con);

}
mysqli_close($con);
}
}
