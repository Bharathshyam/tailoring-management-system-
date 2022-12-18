<?php

$username=$_POST['username'];
$email=$_POST['email'];
$crepass=$_POST['crepass'];
$conpass=$_POST['conpass'];
echo $conpass;

$con=mysqli_connect("localhost","root","","company");
$sql="INSERT INTO register values('$username','$email','$crepass','$conpass')";

$r=mysqli_query($con,$sql);
if($r)
{
     header('location:login form.html');
}

else
{
     echo"failed";
}
?>