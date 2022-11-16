<?php
 $con=mysqli_connect("localhost","root","","project");
 
 $id=$_REQUEST["b"];
 
 $r=mysqli_query($con,"delete from subcatg where id='$id'");
 
 if($r)
	 header("location:viewsubcat.php");
 ?>