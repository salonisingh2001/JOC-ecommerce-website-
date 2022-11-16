<?php
 $con=mysqli_connect("localhost","root","","project");
 
 $id=$_REQUEST["a"];
 
 $r=mysqli_query($con,"delete from addcart where id='$id'");
 
 if($r)
	 header("location:viewcart.php");
 ?>