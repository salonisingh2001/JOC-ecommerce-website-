<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
 $pid=$_REQUEST["a"];
 
 $userid=$_SESSION['useridd'];

 $sqlquery="insert into addcart(userid,pid) values('$userid','$pid')";
 if($con->query($sqlquery)===TRUE){
	header("location:viewcart.php");
	echo "record inserted successfully";
 }
 else{
	 echo "error".$sql."<br>".$con->error;
 }


?>