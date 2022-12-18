<?php

$clothtype=$_POST['cotton'];
$fh_hand=$_POST['hand'];
$pocket=$_POST['pocket'];
$fitting=$_POST['fit'];

$con=mysqli_connect("localhost","root","","company");
$sql="INSERT INTO cloth values('$clothtype','$fh_hand','$pocket','$fitting')";

$r=mysqli_query($con,$sql);
if($r)
{
     header('location:feedback.html');
}

else
{
     echo"failed";
}
?>
