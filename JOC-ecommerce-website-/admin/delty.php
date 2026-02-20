<?php
 $con=mysqli_connect("localhost","root","","project");
 
 $id=$_REQUEST["b"];
 
 $r=mysqli_query($con,"delete from type where type='$id'");
 
 if($r)
	 header("location:viewty.php");
 ?>