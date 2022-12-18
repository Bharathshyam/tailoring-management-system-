<?php
$user_name=$_POST['name'];
$email=$_POST['email'];
$cus_feedback=$_POST['feedback'];

$con=mysqli_connect("localhost","root","","company");
$sql="INSERT INTO feedback values('$user_name','$email','$cus_feedback')";

$r=mysqli_query($con,$sql);
if($r)
{
    echo"database connected";
}
else
{
    echo"not connected";
}



?>