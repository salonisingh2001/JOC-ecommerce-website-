<?php
session_start();

$name=$_POST["un"];

$pass=$_POST["pn"];
include('db.php');

$r=mysqli_query($con,"select * from registration where email='$name' and password='$pass'");
if($row=mysqli_fetch_array($r))
{
    $_SESSION["useridd"]=$row[0];
    header("location:index.php");

}
else
echo "Invalid UserName And password";
?>