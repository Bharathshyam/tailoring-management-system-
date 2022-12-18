<?php

$email=$_POST['email'];
$password=$_POST['password'];


$con=mysqli_connect("localhost","root","","company");
$sql="INSERT INTO logind values('$email','$password')";

$r=mysqli_query($con,$sql);
if($r)
{
     header('location:tms.html');
}
else
{
     echo"failed";
}
?>
